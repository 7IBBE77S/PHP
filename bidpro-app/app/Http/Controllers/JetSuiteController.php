<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JetSuiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getBidTypes() {
        return view("jetsuite.bidtypes");
    }
    public function getPilots() {
        return view("jetsuite.pilots");
    }
}
