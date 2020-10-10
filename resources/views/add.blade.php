@extends('layouts/main')

@section('title')
    Добавить заказ
@endsection

@section('content')
    <p>Добавить заказ</p>
    <form action="adding" method="POST">
        @csrf
        <textarea name="description" placeholder="Описание заказа">
            {{ old('description') }}
        </textarea>
        <button class="login100-form-btn">Отправить</button>
    </form>
@endsection