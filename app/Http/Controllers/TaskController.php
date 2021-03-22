<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function home()
    {
        $userArray = User::all();
        return view('home', ['userArray' => $userArray]);
    }

    public function store(TaskStoreRequest $request)
    {
        //dd($request->user_id);
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->user_id = (int)$request->user_id;
        $task->save();
        echo 'Добавлено!';
        return view('post-view', ['postArray' => $request->all()]);
    }
}
