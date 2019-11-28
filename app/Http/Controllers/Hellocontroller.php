<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;

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

    // public function post(Request $request) {
    //     return view('hello.index', ['msg'=>$request->msg]);
    // }

    // public function index() {
    //     // $data = ['one', 'two', 'three', 'four', 'five'];
    //     $data = [
    //         ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
    //         ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
    //         ['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy'],
    //     ];
    //     return view('hello.index', ['data'=>$data]);
    // }

    // public function index(Request $request) {
    //     // return view('hello.index', ['message'=>'Hello']);
    //     // return view('hello.index', ['data'=>$request->data]);
    //     return view('hello.index');
    // }

    // public function index(Request $request) {
    //     return view('hello.index', ['msg'=>'フォームを入力：']);
    // }

    // public function index(Request $request) {
    //     $validator = Validator::make($request->query(), [
    //         'id' => 'required',
    //         'pass' => 'required',
    //     ]);
    //     if ($validator->false()) {
    //         $msg = 'クエリに問題があります。';
    //     } else {
    //         $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
    //     }
    //     return view('hello.index', ['msg'=>$msg, ]);
    // }

    // public function post(HelloRequest $request) {
    //     return view('hello.index', ['msg'=>'正しく入力されました！']);
    // }

    // public function post(Request $request) {
        
    //     $validator = Validator::make($request->all(),[
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0,150',
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect('/hello')
    //         ->withErrors($validator)
    //         ->withInput();
    //     }
    //     return view('hello.index', ['msg' =>'正しく入力されました！']);
    // }

    // public function post(Request $request) {
    //     $rules = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0,150',
    //     ];
    //     $messages = [
    //         'name.required' => '名前は必ず入力してください。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢を整数で記入してください。',
    //         'age.between' => '年齢は0~150の間で入力してください。',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages);
    //     if ($validator->fails()) {
    //         return redirect('/hello')
    //         ->withErrors($validator)
    //         ->withInput();
    //     }
    //     return view('hello.index', ['msg'=>'正しく入力されました!']);
    // }

    // public function post(Request $request) {
    //     $rules = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric',
    //     ];
    //     $message =  [
    //         'name.required' => '名前は必ず入力してください。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢は整数で記入下さい。',
    //         'age.min' => '年齢はゼロ歳以上で記入ください。',
    //         'age.max' => '年齢は200以下で記入ください。',
    //     ];
    //     $validator->sometimes('age', 'min:0', function($input) {
    //         return !is_int($input->age);
    //     });

    //     $validator->sometimes('age', 'max:200', function($input) {
    //         return !is_int($input->age);
    //     });

    //     if ($validator->false()) {
    //         return redirect('/hello')
    //         ->withErrors($validator)
    //         ->withInput();
    //     }
    //     return view('hello.index', ['msg'=>'正しく入力されました！']);
    // }

    // public function index(Request $request) {
    //     return view('hello.index', ['msg'=>'フォームを入力下さい。']);
    // }

    // public function post(HelloRequest $request) {
    //     return view('hello.index', ['msg'=>'正しく入力されました!']);
    // }

    // public function index(Request $request) {
    //     if ($request->hasCookie('msg')) {
    //         $msg = 'Cookie: ' . $request->cookie('msg');
    //     } else {
    //         $msg = 'クッキーはありません。';
    //     }
    //     return view('hello.index', ['msg'=> $msg]);
    // }

    public function post(Request $request) {
        $validate_rule = [
            'msg' => 'required',
        ];

        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = new Response(view('hello.index', ['msg'=> '「' . $msg . '」をクッキーに保存しました。']));
        $response->cookie('msg', $msg, 100);
        return $response;
    }

    // public function index(Request $request) {
    //     $items = DB::select('select * from people');
    //     return view('hello.index', ['items' => $items]);
    // }

    public function index(Request $request) {
        // if (isset($request->id)) {
        //     $param = ['id' => $request->id];
        //     $items = DB::select('select * from people where id = :id', $param);
        // } else {
        //     $items = DB::select('select * from people');
        // }
        // return view('hello.index', ['items' => $items]);
        // $items = DB::table('people')->get();
        // return view('hello.index', ['items' => $items]);

        // $items = DB::table('people')->orderBy('age', 'asc')->get();
        // return view('hello.index', ['items' => $items]);

        $items = DB::table('people')->simplePaginate(3);
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request) {
        return view('hello.add');
    }

    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request) {
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('hello.edit', ['form' => $item[0]]);
        $item = DB::table('people')
        ->where('id', $request->id)->first();
        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request) {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];
        // DB::update('update people set name =:name, mail = :mail, age = :age where id = :id', $param);
        // return redirect('/hello');
        DB::table('people')
        ->where('id', $request->id)
        ->update($param);
        return redirect('/hello');
    }

    public function del(Request $request) {
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('hello.del', ['form' => $item[0]]);
        $item = DB::table('people')
        ->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request) {
        // $param = ['id' => $request->id];
        // DB::delete('delete from people where id = :id', $param);
        // return redirect('/hello');
        DB::table('people')
        ->where('id', $request->id)->delete();
        return redirect('/hello');
    }

    public function show(Request $request) {
        // $id = $request->id;
        // $items = DB::table('people')->where('id', '<=', $id)->get();
        // return view('hello.show', ['items' => $items]);
        // $name = $request->name;
        // $items = DB::table('people')
        // ->where('name', 'like', '%' . $name . '%')
        // ->orWhere('mail', 'like', '%' . $name . '%')
        // ->get();
        // return view('hello.show', ['items' => $items]);

        $min = $request->min;
        $max = $request->max;
        $items = DB::table('people')
        ->whereRaw('age >= ? and age <= ?', [$min, $max])->get();
        return view('hello.show', ['items' => $items]);
    }

    public function rest(Request $request) {
        return view('hello.rest');
    }

    public function ses_get(Request $request) {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request) {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }
}