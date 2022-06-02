<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;


class PublicacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cargar(Request $request){
        
        
        if(rol('agregarcliente')){
            $template = User::where('id','=', rolname())->get();
            return view('auth/templatedit', ['Vista'=>$template]);
        }
        if(rol('administrador')){
            $registros = User::where('rol','=', 'agregarcliente')->get();
            return view('welcome',['Registros'=>$registros]);
        }
        if (rol('agregarusuario') || rol('agregarcliente') || rol('administrador')){
            $registros = User::where('rol','=', 'agregarcliente')->get();
            return view('welcome',['Registros'=>$registros]);
        }
    
              
    }

    function home()
    {
        $registros = User::where('rol','=', 'agregarcliente')->get();
        return view('welcome',['Registros'=>$registros]);
    }

    function getMostrarUsers()
    {
        $registros = Publicaciones::all();
        return response()->json($registros, 200);
    }

    public function template(Request $request, $id){
        $template = User::where('id','=', $id)->get();
        return view('auth/template', ['Vista'=>$template]);      
    }
}
