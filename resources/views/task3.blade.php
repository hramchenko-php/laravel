<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
</header>
<body>
<?php
echo '<h1>Таблица продуктов<h1><br>';
?>
<br>
<table border="3">
    @foreach($productArray as $item)
        <tr>
            <td>Продукт: {{ $item['name'] }};</td>
            <td>Дата: {{ $item['date'] }};</td>
            <td>
                @if(strtotime($item['date']) > strtotime(date('d.m.Y')))
                   Испорчен: {{$item[] = 0}}
                @else
                    Испорчен: {{$item[] = 1}}
                @endif
            </td>

        </tr>
    @endforeach
</table>
</body>
</html>





