<?php


namespace App\Http\Controllers;


class Task3 extends Controller
{
    public function sendView($name = null)
    {
        $products =
            [
                ['name' => 'Svekla','date'=>'10.03.2022', 'spoiled' => '0'],
                ['name' => 'Morkov','date'=>'10.03.2022', 'spoiled' => '0'],
                ['name' => 'Kapusta','date'=>'10.03.2022', 'spoiled' => '0'],
                ['name' => 'Kartofel','date'=>'10.03.2022', 'spoiled' => '0'],
            ];
        return view('task3', ['name' => $name,'productArray'=>$products]);
    }
}
