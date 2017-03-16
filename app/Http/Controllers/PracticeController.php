<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller {
    //



public function practice1() {
      dump('This is the first example.');
}


public function index($n) {

      $method = 'practice'.$n;

      if(method_exists($this, $method))
          return $this -> $method();
      else
          dd("Pratice route [{$n}] not defined");

}
}
