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
    <input type="text" name="firstname">
    <input type="email" name="email">
    <button type="submit">Отправить</button>
</form>
<br>
</body>
</html>
