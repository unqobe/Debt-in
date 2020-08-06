<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function login(){
     return view('frontend.login');
   }

   public function login_request(Request $request){
     return response()->json($request->all());
   }

}
?>
