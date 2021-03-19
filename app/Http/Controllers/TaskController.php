<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function store()
    	{
    	return view('post-view',['postArray'=>$_POST]);
    	}

}
