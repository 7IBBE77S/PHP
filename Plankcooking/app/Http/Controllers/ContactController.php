<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function getIndex()
    {
        return view('contact/contact');
    }
}
