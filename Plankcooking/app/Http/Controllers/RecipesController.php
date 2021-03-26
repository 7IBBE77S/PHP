<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    //
    public function getIndex()
    {
        return view('recipes/recipes');
    }
}
