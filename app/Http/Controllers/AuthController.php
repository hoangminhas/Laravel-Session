<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showLoginForm(Request $request)
    {
        $email = '';
        $password = '';
        if ($request->cookie('email')) {
            $email = $request->cookie('email');
            $password = $request->cookie('password');
        }

        return view('auth.login', compact('email', 'password'));
    }

    public function login(Request $request)
    {
        $data = $request->only(['email', 'password']);
        if (Auth::attempt($data)) {
            $cookie = cookie('email', $request->email);
            $cookiePassword = cookie('password', $request->password);
            return redirect()->route('index')->cookie($cookie)->cookie($cookiePassword);
        }

        return back();
    }
}
