<?php namespace cartmaster\Cart;


use cartmaster\Cart\Exceptions\InvalidConditionException;
use cartmaster\Cart\Helpers\Helpers;


class Cart
{

   
    protected $session;

   
    protected $events;

 
    protected $instanceName;

    
    protected $sessionKey;

    protected $sessionKeyCartItems;

  
   
    protected $sessionKeyCartConditions;

    protected $config;

    public function __construct($session, $events, $instanceName, $session_key, $config)
    {
        $this->events = $events;
        $this->session = $session;
        $this->instanceName = $instanceName;
        $this->sessionKey = $session_key;
        $this->sessionKeyCartItems = $this->sessionKey . '_cart_items';
        $this->sessionKeyCartConditions = $this->sessionKey . '_cart_conditions';
        $this->config = $config;
        $this->fireEvent('created');
    }

   
    public function session($sessionKey)
    {
        if(!$sessionKey) throw new \Exception("Session key is required.");

        $this->sessionKey = $sessionKey;
        $this->sessionKeyCartItems = $this->sessionKey . '_cart_items';
        $this->sessionKeyCartConditions = $this->sessionKey . '_cart_conditions';

        return $this;
    }

   
    public function getInstanceName()
    {
        return $this->instanceName;
    }

  
    public function get($itemId)
    {
        return $this->getContent()->get($itemId);
    }

    
    public function has($itemId)
    {
        return $this->getContent()->has($itemId);
    }

    public function add($id, $name = null, $price = null, $quantity = null, $attributes = array(), $conditions = array())
    {
        if (is_array($id)) {
           
            if (Helpers::isMultiArray($id)) {
                foreach ($id as $item) {
                    $this->add(
                        $item['id'],
                        $item['name'],
                        $item['price'],
                        $item['quantity'],
                        Helpers::issetAndHasValueOrAssignDefault($item['attributes'], array()),
                        Helpers::issetAndHasValueOrAssignDefault($item['conditions'], array())
                    );
                }
            } else {
                $this->add(
                    $id['id'],
                    $id['name'],
                    $id['price'],
                    $id['quantity'],
                    Helpers::issetAndHasValueOrAssignDefault($id['attributes'], array()),
                    Helpers::issetAndHasValueOrAssignDefault($id['conditions'], array())
                );
            }

            return $this;
        }

     
        $item = $this->validate(array(
            'id' => $id,
            'name' => $name,
            'price' => Helpers::normalizePrice($price),
            'quantity' => $quantity,
            'attributes' => new ItemAttributeCollection($attributes),
            'conditions' => $conditions,
        ));

        
        $cart = $this->getContent();

        if ($cart->has($id)) {

            $this->update($id, $item);
        } else {

            $this->addRow($id, $item);

        }

        return $this;
    }

  
    public function update($id, $data)
    {
        if($this->fireEvent('updating', $data) === false) {
            return false;
        }

        $cart = $this->getContent();

        $item = $cart->pull($id);

        foreach ($data as $key => $value) {
        
            if ($key == 'quantity') {
            
                if (is_array($value)) {
                    if (isset($value['relative'])) {
                        if ((bool)$value['relative']) {
                            $item = $this->updateQuantityRelative($item, $key, $value['value']);
                        } else {
                            $item = $this->updateQuantityNotRelative($item, $key, $value['value']);
                        }
                    }
                } else {
                    $item = $this->updateQuantityRelative($item, $key, $value);
                }
            } elseif ($key == 'attributes') {
                $item[$key] = new ItemAttributeCollection($value);
            } else {
                $item[$key] = $value;
            }
        }

        $cart->put($id, $item);

        $this->save($cart);

        $this->fireEvent('updated', $item);
        return true;
    }

    public function addItemCondition($productId, $itemCondition)
    {
        if ($product = $this->get($productId)) {
            $conditionInstance = "\\cartmaster\\Cart\\CartCondition";

            if ($itemCondition instanceof $conditionInstance) {
               
                $itemConditionTempHolder = $product['conditions'];

                if (is_array($itemConditionTempHolder)) {
                    array_push($itemConditionTempHolder, $itemCondition);
                } else {
                    $itemConditionTempHolder = $itemCondition;
                }

                $this->update($productId, array(
                    'conditions' => $itemConditionTempHolder 
                ));
            }
        }

        return $this;
    }


    public function remove($id)
    {
        $cart = $this->getContent();

        if($this->fireEvent('removing', $id) === false) {
            return false;
        }

        $cart->forget($id);

        $this->save($cart);

        $this->fireEvent('removed', $id);
        return true;
    }

    public function clear()
    {
        if($this->fireEvent('clearing') === false) {
            return false;
        }

        $this->session->put(
            $this->sessionKeyCartItems,
            array()
        );

        $this->fireEvent('cleared');
        return true;
    }

  
    public function condition($condition)
    {
        if (is_array($condition)) {
            foreach ($condition as $c) {
                $this->condition($c);
            }

            return $this;
        }

        if (!$condition instanceof CartCondition) throw new InvalidConditionException('Argument 1 must be an instance of \'cartmaster\Cart\CartCondition\'');

        $conditions = $this->getConditions();

     
        if ($condition->getOrder() == 0) {
            $last = $conditions->last();
            $condition->setOrder(!is_null($last) ? $last->getOrder() + 1 : 1);
        }

        $conditions->put($condition->getName(), $condition);

        $conditions = $conditions->sortBy(function ($condition, $key) {
            return $condition->getOrder();
        });

        $this->saveConditions($conditions);

        return $this;
    }

  
    public function getConditions()
    {
        return new CartConditionCollection($this->session->get($this->sessionKeyCartConditions));
    }

   
    public function getCondition($conditionName)
    {
        return $this->getConditions()->get($conditionName);
    }

   
    public function getConditionsByType($type)
    {
        return $this->getConditions()->filter(function (CartCondition $condition) use ($type) {
            return $condition->getType() == $type;
        });
    }


   
    public function removeConditionsByType($type)
    {
        $this->getConditionsByType($type)->each(function ($condition) {
            $this->removeCartCondition($condition->getName());
        });
    }


    
    public function removeCartCondition($conditionName)
    {
        $conditions = $this->getConditions();

        $conditions->pull($conditionName);

        $this->saveConditions($conditions);
    }

    public function removeItemCondition($itemId, $conditionName)
    {
        if (!$item = $this->getContent()->get($itemId)) {
            return false;
        }

        if ($this->itemHasConditions($item)) {
           
            $tempConditionsHolder = $item['conditions'];

           
            if (is_array($tempConditionsHolder)) {
                foreach ($tempConditionsHolder as $k => $condition) {
                    if ($condition->getName() == $conditionName) {
                        unset($tempConditionsHolder[$k]);
                    }
                }

                $item['conditions'] = $tempConditionsHolder;
            }

         
            else {
                $conditionInstance = "cartmaster\\Cart\\CartCondition";

                if ($item['conditions'] instanceof $conditionInstance) {
                    if ($tempConditionsHolder->getName() == $conditionName) {
                        $item['conditions'] = array();
                    }
                }
            }
        }

        $this->update($itemId, array(
            'conditions' => $item['conditions']
        ));

        return true;
    }

  
    public function clearItemConditions($itemId)
    {
        if (!$item = $this->getContent()->get($itemId)) {
            return false;
        }

        $this->update($itemId, array(
            'conditions' => array()
        ));

        return true;
    }

 
    public function clearCartConditions()
    {
        $this->session->put(
            $this->sessionKeyCartConditions,
            array()
        );
    }

   
    public function getSubTotalWithoutConditions($formatted = true)
    {
        $cart = $this->getContent();

        $sum = $cart->sum(function ($item) {
            return $item->getPriceSum();
        });

        return Helpers::formatValue(floatval($sum), $formatted, $this->config);
    }    
    
    
    public function getSubTotal($formatted = true)
    {
        $cart = $this->getContent();

        $sum = $cart->sum(function (ItemCollection $item) {
            return $item->getPriceSumWithConditions(false);
        });

     
        $conditions = $this
            ->getConditions()
            ->filter(function (CartCondition $cond) {
                return $cond->getTarget() === 'subtotal';
            });

     
        if(!$conditions->count()) return Helpers::formatValue(floatval($sum), $formatted, $this->config);


        $newTotal = 0.00;
        $process = 0;

        $conditions->each(function (CartCondition $cond) use ($sum, &$newTotal, &$process) {

     
            $toBeCalculated = ($process > 0) ? $newTotal : $sum;

            $newTotal = $cond->applyCondition($toBeCalculated);

            $process++;
        });

        return Helpers::formatValue(floatval($newTotal), $formatted, $this->config);
    }

    public function getTotal()
    {
        $subTotal = $this->getSubTotal(false);

        $newTotal = 0.00;

        $process = 0;

        $conditions = $this
            ->getConditions()
            ->filter(function (CartCondition $cond) {
                return $cond->getTarget() === 'total';
            });

       
        if (!$conditions->count()) {
            return Helpers::formatValue($subTotal, $this->config['format_numbers'], $this->config);
        }

        $conditions
            ->each(function (CartCondition $cond) use ($subTotal, &$newTotal, &$process) {
                $toBeCalculated = ($process > 0) ? $newTotal : $subTotal;

                $newTotal = $cond->applyCondition($toBeCalculated);

                $process++;

            });

        return Helpers::formatValue($newTotal, $this->config['format_numbers'], $this->config);
    }


    public function getTotalQuantity()
    {
        $items = $this->getContent();

        if ($items->isEmpty()) return 0;

        $count = $items->sum(function ($item) {
            return $item['quantity'];
        });

        return $count;
    }

    
    public function getContent()
    {
        return (new CartCollection($this->session->get($this->sessionKeyCartItems)));
    }

  
    public function isEmpty()
    {
        $cart = new CartCollection($this->session->get($this->sessionKeyCartItems));

        return $cart->isEmpty();
    }

   
    protected function validate($item)
    {
        $rules = array(
            'id' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:1',
            'name' => 'required',
        );

        // $validator = CartItemValidator::make($item, $rules);

        // if ($validator->fails()) {
        //     throw new InvalidItemException($validator->messages()->first());
            
        // }

           
       
        
        return $item;
    }

   
    protected function addRow($id, $item)
    {
        if($this->fireEvent('adding', $item) === false) {
            return false;
        }

        $cart = $this->getContent();

        $cart->put($id, new ItemCollection($item, $this->config));

        $this->save($cart);

        $this->fireEvent('added', $item);

        return true;
    }


    protected function save($cart)
    {
        $this->session->put($this->sessionKeyCartItems, $cart);
    }

  
 
    protected function saveConditions($conditions)
    {
        $this->session->put($this->sessionKeyCartConditions, $conditions);
    }

 
    protected function itemHasConditions($item)
    {
        if (!isset($item['conditions'])) return false;

        if (is_array($item['conditions'])) {
            return count($item['conditions']) > 0;
        }

        $conditionInstance = "cartmaster\\Cart\\CartCondition";

        if ($item['conditions'] instanceof $conditionInstance) return true;

        return false;
    }

  
    protected function updateQuantityRelative($item, $key, $value)
    {
        if (preg_match('/\-/', $value) == 1) {
            $value = (int)str_replace('-', '', $value);

           
            if (($item[$key] - $value) > 0) {
                $item[$key] -= $value;
            }
        } elseif (preg_match('/\+/', $value) == 1) {
            $item[$key] += (int)str_replace('+', '', $value);
        } else {
            $item[$key] += (int)$value;
        }

        return $item;
    }

   
    protected function updateQuantityNotRelative($item, $key, $value)
    {
        $item[$key] = (int)$value;

        return $item;
    }

    public function setDecimals($decimals)
    {
        $this->decimals = $decimals;
    }

   
    public function setDecPoint($dec_point)
    {
        $this->dec_point = $dec_point;
    }

    public function setThousandsSep($thousands_sep)
    {
        $this->thousands_sep = $thousands_sep;
    }

   
    protected function fireEvent($name, $value = [])
    {
        return $this->events->dispatch($this->getInstanceName() . '.' . $name, array_values([$value, $this]));
    }
    
}
