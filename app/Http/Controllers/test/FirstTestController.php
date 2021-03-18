<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstTestController extends Controller
{
    public function index()
    {
//        User::where('email','new@new.new')->update(['first_name'=>'New name 2']);
//        echo 'Переменная изменена';
        //$user = User::where('email', 'new2@new.new')->first();
        /*$task = new Task();
        $task->name = 'First task name';
        $task->description = 'first task description';
        $task->user_id = $user->id;
        $task->save();
        echo 'Добавлены данные в таблицу TASK ';*/
        /*Task::create([
            'name' => 'Задание третьего юзера!',
            'description' => 'Описание задания для Third user',
            'user_id' => $user->id,
        ]);*/
        //$task = Task::where('user_id', 1)->find(1);

        //Задание 8.2

//        Запросить все значения таблицы
        $task = Task::all();
        foreach ($task as $item) {
            echo 'id задания: ' . $item->id . "\n";
        }

//        получил список заданий по name и user_id
        $task = Task::where('name', 'Задание второго юзера!')
            ->where('user_id', 2)->get();
        foreach ($task as $item) {
            echo 'id задания: ' . $item->id . "\n";
        }

//          Получил первое задание из списка task по тем же критериям
        $task = Task::where('name','Задание второго юзера!')
            ->where('user_id',2)->first();
        echo 'id задания: '.$task->id;

//        Создать запрос на получение 5 заданий по description ИЛИ name.
        $task = Task::where('name', 'Задание второго юзера!')
            ->orWhere('description', 'first task description')->take(5)->get();
        foreach ($task as $item) {
            echo 'id задания: ' . $item->id . "\n";
        }

//       Запрос через генератор запросов на получение всех заданий с присоединенным e-mail юзеров через leftJoin
        $task = DB::table('tasks')->leftJoin('users', 'tasks.user_id', '=', 'users.id')
            ->select('tasks.*', 'users.email')->get();
        foreach ($task as $item) {
            echo "ID задания:" . $item->id . " почта пользователя: " . $item->email . " название задания: " . $item->name . "| ";
        }

        //hasMany чтобы получить все задания которые связаны с пользователем
        $task = User::find(2)->tasks;
        foreach ($task as $item) {
            echo 'Имя задания: ' . $item->name .' Описание: '.$item->description. "\n";
        }

        //hasOne чтобы получить пользователя который связан с этим заданием
        $user = Task::find(2)->user;
        echo $user->first_name;
        echo $user->last_name;

//        Использование аксессора
        $users = User::all();
        foreach ($users as $user){
            echo $user->fullname."|";
        }





    }



}
