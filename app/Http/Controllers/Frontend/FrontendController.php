<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
    return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function service(){
    return view('frontend.service');
    }
    public function blog(){
    return view('frontend.blog');
    }
    
    public function contact(){
        return view('frontend.contact');
    }
  
   
}
