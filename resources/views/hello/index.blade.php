@extends('layouts.helloapp')
<style>
  .pagination { font-size:10px }
  .pagination li { display:inline-block }
  tr th a:link { color: white; }
  tr th a:visited { color: white; }
  tr th a:hover { color: white; }
  tr th a:active { color: white; }
</style>

@section('title', 'Index')

@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
@if (Auth::check())
<p>USER: {{ $user->name . ' (' . $user->email . ')'}}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a> | <a href="/regster">登録</a>)</p>
@endif
<table>
  <tr>
    <th><a href="/hello?sort=name">name</a></th>
    <th><a href="/hello?sort=mail">mail</a></th>
    <th><a href="/hello?sort=age">age</a></th>
    <th>ID</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
    <td>{{$item->id}}</td>
  </tr>
  @endforeach
</table>
{{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
  copyright 2017 tuyano.
@endsection