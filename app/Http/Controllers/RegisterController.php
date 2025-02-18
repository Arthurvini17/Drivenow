<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('autentication.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ], [

            'name.required' => 'Esse campo precisa ser preenchido com seu nome',
            'email.unique' => 'Esse Email ja esta cadastrado',
            'email.email' => 'Esse campo precisa ser preenchido com seu email',
            'password.required' => 'Esse campo precisa ser preenchido com sua senha',
            'password.min' => 'Sua senha tem que ter no minimo :min Digitos'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        return redirect()->route('home.index');
    }
}
