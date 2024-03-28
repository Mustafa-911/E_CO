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

    public function Show(){
        return view('Show');
    }

    public function Contact(){
        return view('Contact');
    }
    public function Create(){
        return view('computers.Create');
    }
    public function index(){
        return view('computers.index');
    }
}
