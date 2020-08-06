<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function welcome(){
     return view('welcome');
  }
  public function about(){
    return view('about');
  }
  public function solutions(){
    return view('solutions');
  }
  public function contactus(){
    return view('contact');
  }
  public function portal(){
    return view('frontend.portal');
  }
}
