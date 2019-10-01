<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  function showHello($name){
    return '<h1>Hello:'.$name.'</h1>';
  }
  function show(){
    return view('users')
      ->with('name','natthaphat')
      ->with('title','Laravel tutorial'):
  }
}
