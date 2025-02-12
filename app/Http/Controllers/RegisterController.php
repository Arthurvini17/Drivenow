<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('autentication.register');
    }

    public function store(Request $request ) {
        $request->validate([
            'name' => ['required'],
            'email' => ['email'],
            'password' => ['required'],
        ],[
            'name.required' => 'Esse campo tem que ser preenchido',
        ])
    }
}
