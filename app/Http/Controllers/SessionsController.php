<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'Logged in');
        }

        return back()->withInput()->withErrors(['email' => 'Your password or email could not be verified']);
    }
}
