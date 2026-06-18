<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function process(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials) === false) {
            return redirect()
                ->route('login')
                ->withInput()
                ->with('feedback.message', 'Credenciales incorrectas, por favor intenta de nuevo')
                ->with('feedback.type', 'danger');
        }

        return redirect()
            ->route('catalog')
            ->with('feedback.message', 'Has iniciado sesión correctamente');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('home')
            ->with('feedback.message', 'Has cerrado sesión correctamente');
    }
}
