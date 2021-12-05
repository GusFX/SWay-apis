<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    
    public function index(){
        return User::get();
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

        // Auth::login($user);

        return response($user, 200);
    }
}
