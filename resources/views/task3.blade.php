<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
</header>
<body>
<?php
echo '<h1>Таблица продуктов<h1><br>';
?>

@if($name)
    Имя пользователя:{{$name}}
@else
    Имя не найдено
@endif
<br><br>
<table border="3">
@foreach($productArray as $item)
    <tr>
        <td>Продукт: {{ $item['name'] }};</td>
        <td>Дата: {{ $item['date'] }};</td>
        <td>Испорчен: {{ $item['spoiled'] }}</td>
    </tr>
@endforeach
</table>
</body>
</html>





