<?php

namespace App\Http\Controllers;
use App\Models\portfolio;
use App\Models\services;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('index');
    }
    public function skills(){
        return view('skills');
    }
    public function services(){
        $services=services::all();
        return view('services', compact('services'));
    }
    public function portfolio(){
        $show=portfolio::all();
        return view('portfolio', compact('show'));
    }
    public function contact(){
        return view('contact');
    }
}
