<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'productId');
    }
}
