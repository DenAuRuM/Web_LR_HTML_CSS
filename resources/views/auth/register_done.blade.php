@extends('layout')

@section('title')
    Регистрация завершена!
@endsection

@section('content')
Уважаемый {{ Request::get('contry') }}, благодарим Вас за регистрацию!
Мы показали, как можем отправлять письма нашим пользователям.

@endsection