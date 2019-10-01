<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function show(){
      return view('views.users')
      ->with('name','natthaphat')
      ->with('title','Laravel tutorial'):
  }
}
