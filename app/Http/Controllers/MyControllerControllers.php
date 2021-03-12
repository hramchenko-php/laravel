<?php


namespace App\Http\Controllers;


class MyControllerControllers extends Controller
{
    public function welcomeController(){
        echo 'Привет это my/controller';
    }
    public function welcomeRoute(){
        echo 'Привет это my/route';
    }
    public function openName($name){
        echo 'Тебя зовут '.$name;
    }
}
