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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{name}', function ($name) {
    echo "miafasz?".$name;
});

Route::post('test', function(){
    echo 'POSTED';
});

Route::get('test', function(){
    echo '<form action="test" method="POST">
            <input type="hidden" name="_token" value="'.csrf_token().'">
            <input type="hidden" name="_method" value="PUT" />
            <input type="submit" value="submit" />
          </form>';
});

Route::put('test', function(){
    echo 'PUT';
});

Route::delete('test', function(){
    echo 'delete';
});

Route::get('test123', 'TestController@index');
