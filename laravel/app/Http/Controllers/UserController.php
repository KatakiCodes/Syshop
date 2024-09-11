<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('userMiddleware')->only('store');
    }

    
    public function store(Request $request)
    {
        $data = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        User::create($data);
        return redirect()->route('home.index')->with('sucesso','utilizador criado com sucesso!');
    }
}
