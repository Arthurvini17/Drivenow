<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
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

        // if (FacadesAuth::attempt($data)) {
        //     $request->session()->regenerate();

        $remember = $request->has('remember');
        //autenticando apenas com email e senha
        if (Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password']
        ], $remember)) {
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }

        return back()->withErrors(['email' => 'As credenciais fornecidas não correspondem aos nossos registros.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
