<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
 public function cal()
 {
    return view('calc');
 }
 public function add(Request $request)
 {
     return view('calc')->with('sum',$request->number1 + $request->number2);
 }
}
