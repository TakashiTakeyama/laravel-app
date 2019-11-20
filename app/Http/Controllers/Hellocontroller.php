<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Hellocontroller extends Controller
{
    // public function index(Request $request,Response $response) {
    //     return <<<EOF
    //     <hmtl>
    //     <head>
    //     <title>Hello/Index</title>
    //     </head>
    //     <body>
    //     <h1>Hello</h1>
    //     <h3>Request</h3>
    //     <pre>{$request}</pre>
    //     <h3>Response</h3>
    //     <pre>{$response}</pre>
    //     </body>
    //     </html>
    //     EOF;

    //     $response->setContent($html);
    //     $response->fullUrl($html);
    //     $response->path($html);
        
    //     return $response;
    // }

    // public function index(Request $request) {
    //     $data = ['msg'=>'これはコントローラーから渡されたメッセージです。',
    // 'id'=>$request->id ];
    //     return view('hello.index', $data);
    // }

    // public function index() {
    //     $data = [
    //         'msg'=>'これはBladeを利用したサンプルです。'
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function post(Request $request) {
    //     $msg = $request->msg;
    //     $data = [
    //         'msg'=>'こんにちは' . $msg . 'さん!',
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function index() {
    //     return view('hello.index', ['msg'=>'']);
    // }

    public function post(Request $request) {
        return view('hello.index', ['msg'=>$request->msg]);
    }

    // public function index() {
    //     // $data = ['one', 'two', 'three', 'four', 'five'];
    //     $data = [
    //         ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
    //         ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
    //         ['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy'],
    //     ];
    //     return view('hello.index', ['data'=>$data]);
    // }

    public function index() {
        return view('hello.index', ['message'=>'Hello']);
    }
}