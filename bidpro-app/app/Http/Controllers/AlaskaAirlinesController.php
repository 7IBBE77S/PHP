<?php

namespace App\Http\Controllers;

use App\BidType;
use Illuminate\Http\Request;

class AlaskaAirlinesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getBidTypes() {
        $bidTypes = BidType::all();
        return view("alaska-airlines.bidtypes", compact('bidTypes'));
    }
    public function getPilots() {
        return view("alaska-airlines.pilots");
    }
}
