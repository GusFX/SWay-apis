<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class SessionsController extends Controller
{


    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            //redirect para o a home
        }
        
        throw ValidationException::withMessages([
            'email'=>'Invalid Credentials.'
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        //redirecionar para tela de login
    }
}
