<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        //parte do front
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
            'phone' => 'required|min:11',
            'cpf' => 'required'

        ]);

        $user = User::create($attributes);

        auth()->login($user);

        //redirecionar para o menu principal(mapa)
    }
}
