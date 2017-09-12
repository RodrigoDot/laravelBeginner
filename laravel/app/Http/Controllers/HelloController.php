<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name = 'WORLD') {
      return view('hello', ['name' => $name]);
    }

    public function show(Request $request) {
      $name = $request->input('name');
      return view('hello', ['name' => $name]);
    }

}
