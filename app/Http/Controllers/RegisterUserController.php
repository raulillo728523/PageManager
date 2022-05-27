<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function agregarusuario(Request $request){
    
        User::insert([
            'id' => null,
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'rol' => 'agregarusuario',
            'password' => Hash::make($request->password),

            ]);
        
            return view('auth.login');
    }

    public function agregarcliente(Request $request){
    
        User::insert([
            'id' => null,
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'rol' => 'agregarcliente',
            'password' => Hash::make($request->password),
            'city' => $request->city,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'description' => $request->description,
            'service1' => $request->service1,
            'service2' => $request->service2,
            'service3' => $request->service3,
            'service4' => $request->service4,
            'service5' => $request->service5,
            'service6' => $request->service6,
            'history' => $request->history,
            'img' => $request->img,
            'type' => $request->type,

            ]);
        
             return view('auth.login');
    }
    
}
