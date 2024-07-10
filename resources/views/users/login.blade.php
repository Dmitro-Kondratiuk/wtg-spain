<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница логина</title>
    <link rel="stylesheet" href="styles.css">
    @vite('resources/css/login.css')
</head>
<body>
<div class="login-container">
    <form class="login-form">
        <h2>Вход</h2>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Войти</button>
        <div class="register-link">
            <p>Нет аккаунта? <a href="{{route('users.register')}}">Зарегистрироваться</a></p>
        </div>
    </form>
</div>
</body>
</html>
