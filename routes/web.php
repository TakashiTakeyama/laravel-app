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

// Route::get('hello', function() {
//     return view('sample');
// });

// Route::get('hello/{id?}/{pass?}', 'Hellocontroller@index');

// Route::get('hello/other', 'Hellocontroller@other');

// Route::get('hello', 'Hellocontroller@index');

// Route::get('hello', function() {
    // return view('hello.index');
// });

// Route::get('hello', 'Hellocontroller@index');
// Route::get('hello', 'Hellocontroller@index')->middleware('hello');
// Route::post('hello', 'Hellocontroller@post');

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');