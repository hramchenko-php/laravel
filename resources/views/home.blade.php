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
    <input type="text" name="name" value="Введите навание задачи">
    <br>
    <select name="user_id">
        @foreach($userArray as $user)
            <option>{{$user->id." ".$user->first_name." ".$user->last_name}}</option>
        @endforeach
    </select>
    <!--<input type="number" name="user_id" value="Введите user id">-->
    <br>
    <input type="text" name="description" value="Введите description задачи">
    <br>
    <button type="submit">Отправить</button>
</form>
<br>
</body>
</html>
