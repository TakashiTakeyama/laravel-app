@extends('layouts.helloapp')

@section('tilte', 'ユーザー認証')

@section('menuber')
@parent
ユーザ認証ページ
@endsection

@section('content')
<P>{{$message}}</P>
<table>
  <form action="/hello/auth" method="post">
  {{ csrf_field() }}
  <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
  <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
  <tr><th></th><td><input type="submit" name="send"></td></tr>
  </form>
</table>
@endsection

@section('footer')
copyright 2019 take.
@endsection