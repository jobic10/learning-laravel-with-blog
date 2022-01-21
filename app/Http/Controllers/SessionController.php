<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You are now logged out');
    }

    public function create()
    {
        return view('session.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' =>  ['required']
        ]);
        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Credentials not valid']);
            // return back()->withInput()->withErrors(['email' => 'Your provided credentials could not be verified']);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome back');
    }
}