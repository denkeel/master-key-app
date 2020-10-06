@extends('layouts/main')

@section('title')
    Заказы
@endsection

@section('content')
    @foreach ($orders as $order)
        <p><a href="/{{ $order }}">Order {{ $order }}</a></p>
    @endforeach
@endsection