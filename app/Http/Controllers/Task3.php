<?php


namespace App\Http\Controllers;

class Task3 extends Controller
{
    //Оставил 2 поля.
    public $productsArr =
        [
            ['name' => 'Svekla', 'date' => '10.03.2022'],
            ['name' => 'Morkov', 'date' => '10.02.2021'],
            ['name' => 'Kapusta', 'date' => '10.02.2021'],
            ['name' => 'Kartofel', 'date' => '10.03.2022'],
        ];

    public function sendView()
    {
        return view('task3', ['productArray' => $this->productsArr]);
    }


}
