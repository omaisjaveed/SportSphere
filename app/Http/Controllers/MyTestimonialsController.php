<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;

class MyTestimonialsController extends Controller
{
    public function testimonialshow()
    {
        $Testimonials = Testimonials::all();
        return response()->json($Testimonials);
    }
}
