@extends('layouts.helloapp')
@section('title', 'Index')

@section('menuber')
  @parent
  インデックスページ
@endsection

<!-- @section('content')
  <p>{{$msg}}</p>
  @if (count($errors) > 0)
  <p>入力に問題があります。再入力してください。</p>
  @endif
  <table>
    <form action="/hello" method="post">
    {{ csrf_field() }}
    @if ($errors->has('name'))
    <tr><th>ERRORS</th><td>{{ $errors->first('name') }}</td></tr>
    @endif
    <tr><th>name: </th><td><input type="text" name="name"
    value="{{ old('name') }}"></td></tr>
    @if ($errors->has('name'))
    <tr><th>ERRORS</th><td>{{ $errors->first('email') }}</td></tr>
    @endif
    <tr><th>mail: </th><td><input type="text" name="mail"
    value="{{ old('mail') }}"></td></tr>
    @if ($errors->has('mail'))
    <tr><th>ERRORS</th><td>{{ $errors->first('age') }}</td></tr>
    @endif
    <tr><th>age: </th><td><input type="text" name="age"
    value="{{ old('age') }}"></td></tr>
    @if ($errors->has('age'))
    @endif
    <tr><th></th><td><input type="submit" value="send">
    </td></tr>
  </table>
@endsection -->
@section('content')
<p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力してください。</p>
@endif
<table>
  <form action="/hello" method="post">
  {{csrf_field()}}
  @if ($errors->has('msg'))
  <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
  @endif
  <tr><th>Message: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
</table>
@section('footer')
  copyright 2017 tuyano.
@endsection