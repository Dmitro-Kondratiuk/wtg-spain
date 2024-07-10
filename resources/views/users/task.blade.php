<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница задачи</title>
    @vite('resources/css/tasks.css')
</head>
<body>
<header>
    <h1>Детали задачи</h1>
    <x-nav>На главную </x-nav>
</header>
<main>
    <div class="task-details-container">
        <div class="task-details-card">
            <h2>Задача 1</h2>
            <p>Полное описание задачи 1</p>
            <div class="comments-section">
                <h3>Комментарии</h3>
                <ul class="comments-list">
                    <li>Комментарий 1</li>
                    <li>Комментарий 2</li>
                </ul>
                <textarea placeholder="Добавить комментарий..." class="comment-input"></textarea>
                <button class="add-comment-button">Добавить</button>
            </div>
        </div>
    </div>
</main>
</body>
</html>
