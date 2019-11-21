@extends('layouts.helloapp')
@section('title', 'Index')

@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <!-- <p>Controller value<br>'message' = {{$message}}</p>
  <p>ViewComposer value<br>'view_message' = {{$view_message}}</p> -->
  <!-- <table>
    @foreach($data as $item)
    <tr>
      <th>{{$item['name']}}</th>
      <td>{{$item['mail']}}</td>
    </tr>
    @endforeach
  </table> -->
  <p>ここが本文のコンテンツです。</p>
  <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection

@section('footer')
  copyright 2017 tuyano.
@endsection