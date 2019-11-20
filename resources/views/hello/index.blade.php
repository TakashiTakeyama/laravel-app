@extends('layouts.helloapp')
@section('title', 'Index')

@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>Controller value<br>'message' = {{$}}
  <ul>
  @each('components.item', $data, 'item')
  </ul>
@endsection

@section('footer')
  copyright 2017 tuyano.
@endsection