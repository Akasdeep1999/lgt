<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function tour()
    {
        return view('frontend.tour');
    }
}
