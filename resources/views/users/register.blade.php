<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница регистрации</title>
    @vite('resources/css/register.css')
</head>
<body>
<div class="registration-container">
    <form class="registration-form">
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
        <div class="login-link">
            <p>Уже есть аккаунт? <a href="">Войти</a></p>
        </div>
    </form>
</div>
</body>
</html>
