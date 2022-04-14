<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:14',
            'username' => 'required|max:14|unique:users,username',
            'email' => 'required|max:100|unique:users,email',
            'password' => 'required|min:6|max:14'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'account has been created');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Logged out');
    }
}
