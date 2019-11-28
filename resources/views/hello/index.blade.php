@extends('layouts.helloapp')
<style>
  .pagination { font-size:10px }
  .pagination li { display:inline-block }
</style>

@section('title', 'Index')

@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
<table>
  <tr><th>Name</th><th>Mail</th><th>Age</th><th>ID</th></tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
    <td>{{$item->id}}</td>
  </tr>
  @endforeach
</table>
{{ $items->links() }}
@endsection

@section('footer')
  copyright 2017 tuyano.
@endsection