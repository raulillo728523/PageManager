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

    public function edit(Request $request){
        
        $requestt = User::findOrFail(rolename());

        dd($requestt);

            $requestt->name = $request->name;
            $requestt->email = $request->email;
            $requestt->username = $request->username;
            $requestt->rol = $request->rol;
            $requestt->password = $request->password;
            $requestt->city = $request->city;
            $requestt->address = $request->address;
            $requestt->telephone = $request->telephone;
            $requestt->description = $request->description;
            $requestt->service1 = $request->service1;
            $requestt->service2 = $request->service2;
            $requestt->service3 = $request->service3;
            $requestt->service4 = $request->service4;
            $requestt->service5 = $request->service5;
            $requestt->service6 = $request->service6;
            $requestt->history = $request->history;
            $requestt->img = $request->img;
            $requestt->type = $request->type;
            
        $requestt->save();

        
    }
    
}
