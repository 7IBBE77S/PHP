<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\OrderItem;
use App\OrderCart;
use Carbon\Carbon;
class CartController extends Controller
{
   
 /*** 
   If you encounter a "Trying to get property 
   'orderCartId' of non-object" Error please flush the session (session::flush();) or add something to the cart.


***/

    
public function getIndex(Request $request)


{      
   // session::flush();

    $user_identifier = session::get('uniqueIdentifier');
    if($user_identifier){
        
        $user_cart_id = OrderCart::where('uniqueIdentifier', $user_identifier)->first()->orderCartId;
        $orderItems = OrderItem::where('orderCartId', $user_cart_id)->get();
        // dd($orderItems->product->price);
        $total = 0;
        foreach($orderItems as $c){
            $total += $c->product->price * $c->qty;
        }
        // dd($orderItems);
        return view('cart/cart', compact('orderItems', 'total'));
    }
    return view('cart/cart');
    // dd($request->all());

}
 public function getCheckout(Request $request)


    {
        
         // session::flush();
        
        $user_identifier = session::get('uniqueIdentifier');
        $user_cart_id = OrderCart::where('uniqueIdentifier', $user_identifier)->first()->orderCartId;
       
       
        $orders = OrderCart::where('orderCartId', $user_cart_id)->get();
        
        $orderItems = OrderItem::where('orderCartId', $user_cart_id)->get();
  
        $total = 0;
        foreach($orderItems as $c){
            $total += $c->product->price * $c->qty;
        }

    
        
        return view('cart/checkout', compact('orders', 'orderItems', 'total'));
    }

public function getReview(Request $request)


    {
         // session::flush();
     
        $user_identifier = session::get('uniqueIdentifier');
        
        $shipping_type = session::get('shippingType');

        $user_cart_id = OrderCart::where('uniqueIdentifier', $user_identifier)->first()->orderCartId;
       
       
        $orders = OrderCart::where('orderCartId', $user_cart_id)->get();
        
        $orderItems = OrderItem::where('orderCartId', $user_cart_id)->get();
  

        
        $total = 0;
   

        foreach($orderItems as $c){
            $total += $c->product->price * $c->qty;


           
           
        }
     
        // $shipping_cost = OrderCart::where('shippingCost', $user_cart_id)->get();

        // $finalTotal = 0;
  
         
        
        // foreach($orderItems as $c){
        //     $finalTotal += $c->product->price * $c->qty + $c->orderCart->shippingCost;
        // }
        return view('cart/review', compact('orders', 'orderItems', 'total'));
    }

    public function getReceipt(Request $request)


    {
         // session::flush();
        
        $user_identifier = session::get('uniqueIdentifier');
        $user_cart_id = OrderCart::where('uniqueIdentifier', $user_identifier)->first()->orderCartId;
       
       
        $orders = OrderCart::where('orderCartId', $user_cart_id)->get();
        
        $orderItems = OrderItem::where('orderCartId', $user_cart_id)->get();
  
        
        $total = 0;
        foreach($orderItems as $c){
            $total += $c->product->price * $c->qty;
            // $finalTotal += $total + $c->shippingCost;
        }
        // $shipping_cost = OrderCart::where('shippingCost', $user_cart_id)->get();

        // $finalTotal = 0;
        // if($shipping_cost = ) {
        //     foreach($orderItems as $c){
        //         $finalTotal += $c->product->price * $c->qty + $c->product->shippingCost = 10.95;
        //     }
        // }
        // foreach($orderItems as $c){
        //     $finalTotal += $c->product->price * $c->qty + $c->product->shippingCost;
        // }
        return view('cart/receipt', compact('orders', 'orderItems', 'total'));
    }
    public function postPurchase (Request $request) 
    {
        // $this->validate($request, [
          
       
        // ]);

        $order = DB::table('order_carts')->where('orderCartId', $request->hiddenId);

        $order->update([

            'shippingCost' => $request->shippingCost,
            'shippingType' => $request->shippingType,
            'orderTotal' => $request->orderTotal,
            'creditCardType' => $request->creditCardType,
         
            'purchaseDate' => Carbon::now(),

            
             
        ]);

        if($order){            
            // return redirect()->back()->with('success', 'Shipping Info Saved Correctly');

          
            return redirect('Cart/Receipt')->with('success', 'Shipping Info Saved Correctly');
        }
            // return redirect()->back()->with('success', 'Unable To Add to Cart -');

    }
public function postCheckout (Request $request) 
    {
        
        $this->validate($request, [
            'shippingLastName' => 'required|string|max:100',
            'shippingLastName' => 'required|string|max:100',
            'shippingAddress1' => 'required|string|max:250',
            'shippingAddress2' => 'nullable|string|max:250',
            'shippingCity' => 'required|string|max:100',
            'shippingState' => 'required|string|max:10',
            'shippingPostalCode' => 'required|regex:/\b\d{5}\b/|max:20',
            'shippingPhone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:20',
            'shippingEmail' => 'nullable|email|max:250',

            'billingLastName' => 'required|string|max:100',
            'billingLastName' => 'required|string|max:100',
            'billingAddress1' => 'required|string|max:250',
            'billingAddress2' => 'nullable|string|max:250',
            'billingCity' => 'required|string|max:100',
            'billingState' => 'required|string|max:10',
            'billingPostalCode' => 'required|regex:/\b\d{5}\b/|max:20',
            'billingPhone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:20',
            'billingEmail' => 'required|email|max:250',
            'notes'=>'nullable|string|max:1000'
        ]);

        $order = DB::table('order_carts')->where('orderCartId', $request->hiddenId);

        $order->update([

            'shippingFirstName' => $request->shippingFirstName,
            'shippingLastName' => $request->shippingLastName,
            'shippingAddress1' => $request->shippingAddress1,
            'shippingAddress2' => $request->shippingAddress2,
            'shippingCity' => $request->shippingCity,
            'shippingState' => $request->shippingState,
            'shippingPostalCode' => $request->shippingPostalCode,
            'shippingPhone' => $request->shippingPhone,
            'shippingEmail' => $request->shippingEmail,
            'shippingCountry' => $request->shippingCountry,

            'billingFirstName' => $request->billingFirstName,
            'billingLastName' => $request->billingLastName,
            'billingAddress1' => $request->billingAddress1,
            'billingAddress2' => $request->billingAddress2,
            'billingCity' => $request->billingCity,
            'billingState' => $request->billingState,
            'billingPostalCode' => $request->billingPostalCode,
            'billingPhone' => $request->billingPhone,
            'billingEmail' => $request->billingEmail,
            'billingCountry' => $request->billingCountry,
            'dateCreated' => Carbon::now(),

            'notes' => $request->notes,
             
        ]);

        if($order){            
            // return redirect()->back()->with('success', 'Shipping Info Saved Correctly');

          
            return redirect('Cart/Review')->with('success', 'Shipping Info Saved Correctly');
        }
            return redirect()->back()->with('success', 'Unable To Add to Cart -');


    }

 public function postRemove(Request $request)


    {
        ;
        // $this -> validate($request, [
        //     'qty' => 'numeric|not_in:0',]);
        $user_identifier = session::get('uniqueIdentifier');
        $user_cart_id = DB::table('order_carts')->where('uniqueIdentifier', $user_identifier)->first()->orderCartId;

        $this -> item = DB::table('order_items')->where('orderCartId', $user_cart_id)->where('orderItemsId', $request->hiddenId)->delete();
        return redirect()->back()->with('success', 'Cart Item Deleted Successfully');

   
    }
    public function putUpdate(Request $request)


    {
        $this -> validate($request, [
            'qty' => 'required|integer|between:1,99',]);

        
            $user_identifier = session::get('uniqueIdentifier');
            $user_cart_id = DB::table('order_carts')->where('uniqueIdentifier', $user_identifier)->first()->orderCartId;
            // dd($user_cart_id);
    
            $this -> item = DB::table('order_items')->where('orderCartId', $user_cart_id)
                ->where('orderItemsId', $request->hiddenId)
                ->update([
                    'qty' => $request->qty
                ]);
    
            return redirect()->back()->with('success', 'Cart Item Updated Successfully');
    
    
   
    }
    

}
