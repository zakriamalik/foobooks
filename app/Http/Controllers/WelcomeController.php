<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  //Get Books Method
  public function index() {
      return view('welcome');
  }

//Get invoke method
  public function __invoke() {
      return view('welcome');
  }
}
