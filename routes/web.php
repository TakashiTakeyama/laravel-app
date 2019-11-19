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

Route::get('hello', function() {
    return view('sample');
});

Route::get('hello/{msg?}', function ($msg) {
    $html = <<<EOF
    <html>
    <head>
    <title>Hello</title>
    <style>
    body {font-size:16px; text-align:right; color:#eee;
        margin: -40px 0px -50px 0px; }
        </style>
        </head>
    <body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これはサンプルで作ったページです。</p>
    </body>
    </html>
    EOF;
    return $html;

});