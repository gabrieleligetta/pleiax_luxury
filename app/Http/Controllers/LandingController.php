<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $title = 'Pleiax Luxury | Home';
        return view('homepage',compact(['title']));
    }
}
