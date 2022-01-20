<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // Create user
        $attributes = request()->validate([
            'name' => 'required|max:100',
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => 'required|',
        ]);
        User::create($attributes);
        return redirect('/')->with('success', 'Account created');;
    }
}