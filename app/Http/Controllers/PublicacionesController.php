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
        

        if (rol('agregarusuario')){
            $registros = User::where('rol','=', 'agregarcliente')->get();
            return view('welcome',['Registros'=>$registros]);
        }else{
            return viwe('template');
        }
        // $busqueda = 'Michoacan';
        // $count = Publicaciones::count('id');
        // $count_today = Publicaciones::where('fecha', '=', 'curdate()')->count();
        // $count_grafica = Publicaciones::groupBy('lugar_extraccion')->selectRaw('lugar_extraccion, count(*) as total')->get();
        // dd($count_grafica);
        // return response()->json($registros, 200);
        // 
              
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
