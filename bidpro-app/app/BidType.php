<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidType extends Model
{
    protected $fillable = ['fleet', 'seat', 'domicile', 'status', 'imported'];
}
