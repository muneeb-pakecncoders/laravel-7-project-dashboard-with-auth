<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function Signin(){
   	return view('adminend.signin');
   }
   public function Signup(){
   	return view('adminend.signup');
   }
}
