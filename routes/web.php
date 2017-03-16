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

  if(config('app.env') == 'local') {
      Route::get('/logs',function(){});
  }

# Existing route
Route::get('/', 'WelcomeController@index');

#practice route
Route::any('/practice/{n?}','PracticeController@index');

Route::get('/debugbar', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::info('Current environment: '.App::environment());
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Just demoing some of the features of Debugbar';

});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
