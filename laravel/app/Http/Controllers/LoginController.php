<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct() {
        $this->middleware('loginMiddleware')->only('auth');
    }

    public function auth(Request $request)
    {
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password
        ];
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }
        else
            return redirect()->back()->with('logFailed','Email ou Palavra passe incorreta');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('home.index');
    }
}
