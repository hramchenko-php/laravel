<?php


namespace App\Http\Controllers;


class Task2 extends Controller
{
    public function task2(){
        echo 'Привет это my/controller';
    }
    public function task22(){
        echo 'Привет это my/route';
    }
    public function openName($name){
        echo 'Тебя зовут '.$name;
    }
}
