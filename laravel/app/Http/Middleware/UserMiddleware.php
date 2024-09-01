<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
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
        $data = $request->validate([
            'firstName' =>['required'],
            'lastName' =>['required'],
            'email' =>['required','email'],
            'password' =>['required'],
        ],
        [
            'firstName.required'=>'O primeiro nome do utilizador dever ser informado!',
            'lastName.required'=>'O segundo nome do utilizador dever ser informado!',
            'email.required'=>'O email do utilizador dever ser informado!',
            'email.email'=>'O email do utilizador dever ter um formato correto!',
            'password.required'=>'A palavra passe do utilizador dever ser informada!',
        ]
    );
        return $next($request);
    }
}
