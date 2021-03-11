<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\WelcomeControllers;
//use App\Http\Controllers\test\FirstTestController;
//use App\Http\Controllers\test\SecondTestController;
//use App\Http\Controllers\UserController;

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Задание 1 группировка по префиксу my и ввывод переменной
Route::group(['prefix'=>'my'],function (){
   Route::get('/route/{var?}',function ($var=null){
       if ($var!=null)
       {
           echo $var;
           dd($var);
       }
       else
       {
           echo 'Ввкдите значение переменной в адресной строке после route<br>
            http://laratest.loc/my/route/[переменная]';
       }

   });
});*/

/*//Эксперименты!
//Route::get('/', [WelcomeController::class, 'show']);
Route::group(['prefix' => 'test'], function () {
    Route::get('/1', [FirstTestController::class, 'index']);
    Route::get('/2', [SecondTestController::class, 'index']);
});
Route::get('/user/{name?}', [UserController::class, 'showName']);
//Route::get('/', 'WelcomeController@show');*/


//Задание 2
Route::group(['prefix' => 'my'], function () {
    Route::get('/controller', [\App\Http\Controllers\Task2::class, 'task2']);
    Route::get('/route', [\App\Http\Controllers\Task2::class, 'task22']);
    Route::get('/route/{name?}', [\App\Http\Controllers\Task2::class, 'openName']);
    //Route::get('/view', [UserController::class, 'showName']); часть задания 2
    //Задание 3 представления
    Route::get('/view/', [\App\Http\Controllers\Task3::class, 'sendView']);
});
