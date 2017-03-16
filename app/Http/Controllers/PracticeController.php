<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller {
    //


public function practice3() {

        $random = new \Rych\Random\Random();
        $randomBytes = $random->getRandomBytes(16);
        dump($randomBytes);
        $randomNumber = $random->getRandomInteger(1,100);
        dump($randomNumber);
        $randomString = $random->getRandomString(8);
        dump($randomString);
        #return $random->getRandomString(8);
  }



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
