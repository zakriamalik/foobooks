<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //Get Books Method
    public function index() {
          return 'View all books';
    }

    public function view($title=null) {
        if($title==null) {
        return 'You need to specify a book title';
        }
        return 'You are searching for a book called '.$title;
    }
}
