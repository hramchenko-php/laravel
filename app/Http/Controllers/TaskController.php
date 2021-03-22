<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function store(Request $request)
    	{
    	return view('post-view',['postArray'=>$request->all()]);

    	}

}
