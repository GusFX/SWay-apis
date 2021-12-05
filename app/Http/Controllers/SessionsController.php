<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app/Models/User;

class SessionsController extends Controller
{

    // public function create()
    // {
    //     //acess the login page
    // }

    public function store()
    {
        $attributes => request()->validate([
            'email' => 'required', //|exists:users,email
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes))
        {
            session()->regenerate();
            //redirect para o a home
        }
        
        throw ValidationException::withMessages([
            'email'->'Invalid Credentials.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        //redirecionar para tela de login
    }
}
