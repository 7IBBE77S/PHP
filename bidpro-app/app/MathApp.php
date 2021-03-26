<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MathApp extends Model
{
    protected $fillable = ['firstNumber', 'operator', 'secondNumber'];
}
