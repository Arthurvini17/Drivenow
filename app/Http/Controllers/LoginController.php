<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function index()
    {
        return view('autentication.login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ], [
            'name' => 'Esse campo tem que ter um nome',
            'email.email' => 'Esse campo tem que ser um email',
            'email.required' => 'Esse campo tem que ter um email',
            'password.required' => 'Esse campo tem que ter uma senha',
            'password.min' => 'Sua senha tem que ter no minimo :min digitos'
        ]);

        if (FacadesAuth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
    }
}
