<?php


namespace App\Http\Controllers;

class MyControllerView extends Controller
{
    protected $productsArr =
        [
            ['name' => 'Svekla', 'date' => '10.03.2022'],
            ['name' => 'Morkov', 'date' => '10.02.2021'],
            ['name' => 'Kapusta', 'date' => '10.02.2021'],
            ['name' => 'Kartofel', 'date' => '10.03.2022'],
        ];

    public function sendView()
    {
        return view('my-view', ['productArray' => $this->productsArr]);
    }


}
