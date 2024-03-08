<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return "<h1>Index Page</h1>";
    }

    public function about(){
        return "<h1>About Page</h1>";
    }

    public function portfolio(){
        return "<h1>Portfolio Page</h1>";
    }

    public function contact(){
        return "<h1>Contact Page</h1>";
    }
}
