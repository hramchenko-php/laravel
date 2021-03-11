<?php


namespace App\Http\Controllers;


class Task3 extends Controller
{
    public $productsArr =
        [
            ['name' => 'Svekla', 'date' => '10.03.2022', 'spoiled' => '0'],
            ['name' => 'Morkov', 'date' => '10.02.2021', 'spoiled' => '0'],
            ['name' => 'Kapusta', 'date' => '10.02.2021', 'spoiled' => '0'],
            ['name' => 'Kartofel', 'date' => '10.03.2022', 'spoiled' => '0'],
        ];

    public function sendView($name = null)
    {
        return view('task3', ['name' => $name, 'productArray' => $this->Products($this->productsArr)]);
    }

    public function Products($array)
    {
        foreach ($array as $item) {
            $dataProd = strtotime($item['date']);
            $currentData = strtotime(date('d.m.Y'));
            if ($dataProd < $currentData) {
                $item['spoiled'] = 1;
            } else {
                $item['spoiled'] = 0;
            }
            $arrayNew[] = $item;
        }
        return $arrayNew;
    }
}
