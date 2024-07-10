@extends('layout.index')
@vite('resources/css/register.css')
@section('content')
<div class="registration-container">
    <form class="registration-form" id="registration-form-user">
        <h2>Регистрация</h2>
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
</div>
    @vite('resources/js/users/register.js')
@endsection
