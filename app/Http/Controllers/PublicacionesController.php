<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publicaciones;

class PublicacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cargar(Request $request){
        // $registros = Publicaciones::all();
        // $busqueda = 'Michoacan';
        // $count = Publicaciones::count('id');
        // $count_today = Publicaciones::where('fecha', '=', 'curdate()')->count();
        // $count_grafica = Publicaciones::groupBy('lugar_extraccion')->selectRaw('lugar_extraccion, count(*) as total')->get();
        // dd($count_grafica);
        // return response()->json($registros, 200);
        // 
        return view('welcome');      
    }
    
    function getMostrarUsers()
    {
        $registros = Publicaciones::all();
        return response()->json($registros, 200);
    }

    public function template(Request $request){
        return view('auth/template');      
    }
}
