<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function order_details(){
        $this->hasMany(OrderDetails::class, 'order_id');
    }
}
