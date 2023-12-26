<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create()
    {

        return view('register');
    }

    public function store(UserCreateRequest $request)
    {

        // $validated = $request->validate([
        //     'username' => 'unique:users|required',
        //     'email' => 'unique:users|required',
        //     'password' => 'required|min:8|confirmed',
        // ]);
        $validatedData = $request->validatedWithHashedPassword();

        $user = User::create($validatedData);

        if ($user) {
            Session::flash('status', 'success');
            Session::flash('message', 'Register Success !!');
        }

        return redirect('/login');
    }

    public function show($id)
    {
        $user = User::with('profile', 'posts')->find($id);

        return view('account', ['user' => $user]);
    }
}
