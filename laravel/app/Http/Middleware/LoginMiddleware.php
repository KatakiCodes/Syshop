<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ],
        [
            'email.required'=>'O email deve ser informado!',
            'email.email'=>'O email deve ser um email válido!',
            'password.required' =>'A palavra passe deve ser informada'
        ]
    );
        return $next($request);
    }
}
