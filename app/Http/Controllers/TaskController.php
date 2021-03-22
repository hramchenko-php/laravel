<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function store(TaskStoreRequest $request)
    	{
    	    dd($request->validated());
    	return view('post-view',['postArray'=>$request->all()]);
    	}
}
