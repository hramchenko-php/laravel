<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
//        // Получение авторизованного пользователя
//        $user = Auth::user();
//        // Получение ID авторизованного пользователя
//        $userId = Auth::id();
//        // Проверка авторизован пользователь или нет
//        $userIsAuth = Auth::check();
//        // Проверка пользователь гость или нет
//        $userIsNotAuth = Auth::guest();

        // Выход из авторизованного режима
        //Auth::logout();
        //dd(compact('user', 'userId', 'userIsAuth', 'userIsNotAuth'));


        dd($request->attributes->get("start_time"));
        return view('home');
    }
}
