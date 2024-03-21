<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function Home(){
        return view('Home');
    }

    public function About(){
        return view('About');
    }

    public function Portfolio(){
        return view('Portfolio');
    }

    public function Contact(){
        return view('Contact');
    }
}
