<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //
    public function getIndex()
    {
        return view('reviews/reviews');
    }
    public function getTestimonials()
    {
        return view('reviews/testimonials');
    }
}
