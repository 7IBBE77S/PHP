<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelloMessage extends Model
{
    protected $fillable = ['firstName', 'numOfTimes'];
}
