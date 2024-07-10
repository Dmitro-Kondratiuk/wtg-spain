@extends('layout.index')
@extends('layout.header')
@section('content')
    @vite('resources/css/app.css')
<div class="container">
<x-nav></x-nav>
    <main class="main-content">
        <div class="task-container">
            <div class="task-card" data-date="2024-07-10" data-status="done">
                <h2>Задача 1</h2>
                <p>Описание задачи 1</p>
                <p class="task-date">10 июля 2024 г.</p>
                <p class="task-status">Статус: Завершена</p>
                <button>Подробнее</button>
            </div>
            <div class="task-card" data-date="2024-07-09" data-status="inProgress">
                <h2>Задача 2</h2>
                <p>Описание задачи 2</p>
                <p class="task-date">9 июля 2024 г.</p>
                <p class="task-status">Статус: В процессе</p>
                <button>Подробнее</button>
            </div>
            <div class="task-card" data-date="2024-07-08" data-status="todo">
                <h2>Задача 3</h2>
                <p>Описание задачи 3</p>
                <p class="task-date">8 июля 2024 г.</p>
                <p class="task-status">Статус: Не начата</p>
                <button>Подробнее</button>
            </div>
        </div>
    </main>
</div>
@endsection
