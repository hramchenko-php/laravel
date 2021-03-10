<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
</header>
<body>
<?php
echo '<h1>Вот это представленеие!<h1><br>';

?>
@if($name)
    Имя:{{$name}}
@else
    Имя не найдено
@endif

<br><br>
<ul>
    @foreach($fakeData as $item)
        <li>
            Lesson: {{ $item['lesson'] }};
            Level: {{ $item['level'] }}
        </li>
    @endforeach
</ul>

</body>
</html>
