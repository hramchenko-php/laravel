<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function home()
    {
        $userArray = User::select("id", "first_name", "last_name")->get();
        return view('home', compact('userArray'));
    }

    public function store(TaskStoreRequest $request)
    {
        Task::create($request->validated());
        return view('post-view', ['postArray' => $request->all()]);
    }
}
