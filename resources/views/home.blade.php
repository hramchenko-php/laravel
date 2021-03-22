<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
</header>
<body>
<?php

echo '<h1>Главная HOME<h1><br>';

?>

<form action="/task/store" method="post">
    @csrf
    <input type="text" name="name" value="Введите имя">
    <br>
    <input type="email" name="email" value="Введите email">
    <br>
    <input type="number" name="user_id">
    <br>
    <input type="text" name="description">
    <br>
    <button type="submit">Отправить</button>
</form>
<br>
</body>
</html>
