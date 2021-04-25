<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestAuthController extends Controller
{
    public function testUser()
    {
        $auth = Auth::user();
        if (Auth::check()) {
            dump($auth);
            dump($auth->last_name);
        } else {
            dump("Авторизируйтесь!");
        }
    }
}
