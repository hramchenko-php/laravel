<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showName($name = null)
    {
        $fakeArray =
            [
                ['lesson' => 'Introduction', 'level' => '1'],
                ['lesson' => 'Routes', 'level' => '2'],
                ['lesson' => 'Controllers', 'level' => '3'],
                ['lesson' => 'Views', 'level' => '4'],
            ];
        return view('user-name', ['name' => $name,'fakeData'=>$fakeArray]);
    }

    public function store(UserStoreRequest $request)
    {
        dd($request->validated());
    }
}
