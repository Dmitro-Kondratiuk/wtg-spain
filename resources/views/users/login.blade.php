@extends('layout.index')
@section('content')
    @vite('resources/css/login.css')
<div class="login-container">
    <form class="login-form" id="login-form">
        <h2>Вход</h2>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" id="login">Войти</button>
        <div class="register-link">
            <p>Нет аккаунта? <a href="{{route('users.register')}}">Зарегистрироваться</a></p>
        </div>
    </form>
</div>
    @vite('resources/js/users/login.js')
@endsection
