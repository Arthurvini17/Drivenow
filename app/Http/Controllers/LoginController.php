<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function index(){
        return view('autentication.login');
    }

    public function authenticate(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(FacadesAuth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

    }
}
