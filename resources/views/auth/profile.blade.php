@extends('layout')

@section('title')
    Профиль пользователя 
@endsection

@section('content')
<html>
<meta charset="utf-8">
  <body>
    <link rel="stylesheet" href="style.css">
    <table align="center">
            <h1 class="text-center">Профиль пользователя</h1>
            @if(auth()->guard()->user()->file == '0')
            <div class="foto"><img src="\img\def-ava.jpg"></div>
            @endif

            <form action = "{{ route('auth.profile.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>
                    <div> 
                      <label for="email"><b>Логин</b></label>
                      <input class="field" type="email" placeholder="example@gmail.com" name="email" value="{{ auth()->guard()->user()->email }}" readonly required autocomplete="on" maxlength="30"><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                      <label for="psw"><b>Пароль</b></label>
                      <input class= "pass"type="password" placeholder="пароль" name="psw" value="{{ auth()->guard()->user()->psw }}" readonly required  autocomplete="on" maxlength="36"><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                      <label for="nick"><b>Никнейм</b></label>
                      <input type="text" id="nick" name="nick"  value="{{ auth()->guard()->user()->nick }}" required  autocomplete="on"><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                      <label for="birthday"><b>Введите дату рождения (до 1 января 2005года)</b></label>
                      <input class= "birthday" type="date" id="birthday" name="birthday" value="{{ auth()->guard()->user()->birthday }}" readonly required  autocomplete="on" max="2005-01-01" min="1900-10-30">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                      <div>
                        <label for="file"><b>Выберите файл для загрузки аватара</b></label>
                        <input type="file" id="file" name="file" readonly><br>
                      </div><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                      <label for="phone"><b>Введите номер телефона</label></b>
                      <input class="phone" type="tel" id="phone" name="phone" placeholder="x-xxx-xxx-xx-xx" value="{{ auth()->guard()->user()->phone }}" pattern="[0-9]{1}-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" readonly required  autocomplete="on" maxlength="16"><br>
                      <small>Формат ввода: 7-999-999-99-99</small><br><br>
                      </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>

                      <input type="submit" value="Обновить профиль" name="rgstry" readonly>
                      <a href = "LR1Main.html">Вернуться назад</a></td>
                      </div>
                </td>
            </tr>
      </form>  
    </table>
  </body>
<html>

<div style="color: red">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>

@endsection