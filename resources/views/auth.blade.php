@extends('layouts/main')

@section('title')
Аутентификация
@endsection

@section('content')
<form action="login" method="POST">
    <input class="" type="text" name="username">
    <input class="" type="text" name="pass">
    <input class="" type="checkbox" id="ckb1" name="remember-me">
    <label class="" for="ckb1"></label>
    <button class="login100-form-btn"></button>
</form>
@endsection

@section('bottom-navigation')

@endsection