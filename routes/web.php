<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeControllers;
use App\Http\Controllers\test\FirstTestController;
use App\Http\Controllers\test\SecondTestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyControllerView;
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

/*Эксперименты!!!
Route::get('/', [WelcomeController::class, 'show']);

Route::get('/user/{name?}', [UserController::class, 'showName']);
Route::get('/', 'WelcomeController@show');*/

Route::group(['prefix' => 'test'], function () {
    Route::get('/1', [FirstTestController::class, 'index']);
    Route::get('/2', [SecondTestController::class, 'index']);
});

Route::group(['prefix' => 'my'], function () {
    Route::get('/controller', [\App\Http\Controllers\MyControllerControllers::class, 'welcomeController']);
    Route::get('/route', [\App\Http\Controllers\MyControllerControllers::class, 'welcomeRoute']);
    Route::get('/route/{name?}', [\App\Http\Controllers\MyControllerControllers::class, 'openName']);
    //Route::get('/view', [UserController::class, 'showName']);
    Route::get('/view', [\App\Http\Controllers\MyControllerView::class, 'sendView']);
});
//Задание 9.2
Route::get('/home',[\App\Http\Controllers\TaskController::class,'home']);
Route::post('/task/store',[\App\Http\Controllers\TaskController::class,'store']);

Route::group(['prefix' => 'user'], function () {
    Route::post('store',[UserController::class,'store']);
});
