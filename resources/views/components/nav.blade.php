<nav class="sidebar">
    <ul>
        @if(!empty($slot->content))
        <li><button class="menu-button" id>{{$slot}}</button></li>
        @endif
        <li><button class="menu-button">Создать задачу</button></li>
        <li><button class="menu-button">Создать группу</button></li>
    </ul>
</nav>
