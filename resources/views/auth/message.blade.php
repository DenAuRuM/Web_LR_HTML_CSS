@extends('layout')

@section('title')
    Сообщение 
@endsection

@section('content')
<h1 class="text-center">
    @if($message == 'register_done')
        Регистрация прошла успешно!
    @elseif($message == 'register_done_but_auth_error')
      Успешная регистрация, но войти не удалось!
    @elseif($message == 'auth_error')
      Неверный логин и/или пароль
    @elseif($message == 'profie_updated')
      Профиль обновлён!
    @elseif($message == 'access_denied')
      Нет прав!
    @elseif($message == 'auth_required')
    Требуется регистрация
    @else
      ???
    @endif
</h1>
@endsection

