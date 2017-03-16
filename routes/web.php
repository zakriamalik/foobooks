<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# New route
Route::get('/example', function () {
    return 'hello there!';
});

# New route
Route::get('/book', 'BookController@index');

# New route
Route::get('/book/{title?}', 'BookController@view');

# Existing route
Route::get('/', 'WelcomeController@index');

#practice route
Route::any('/practice/{n?}','PracticeController@index');
