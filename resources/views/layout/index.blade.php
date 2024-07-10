<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title','Wtg-Spain')</title>
</head>
<body>
<header>
    <h1>Мои задачи</h1>
    <div class="filter-controls">
        <label for="dateFilter">Фильтр по дате:</label>
        <x-select-date></x-select-date>
        <label for="statusSort">Сортировать по статусу:</label>
        <x-select-status></x-select-status>
        <button id="search" type="button">Search</button>
    </div>
</header>

@yield('content')
</body>
