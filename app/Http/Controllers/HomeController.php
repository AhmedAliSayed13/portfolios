<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function skills(){
        return view('skills');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function contact(){
        return view('contact');
    }
    public function experience(){
        return view('experience');
    }
}
