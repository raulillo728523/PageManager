<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDFD;
use App\Models\Publicaciones;


class PDFController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function print(Request $request){
        $registros = Publicaciones::all();
        $busqueda = 'Michoacan';
        $count = Publicaciones::count('id');
        $count_today = Publicaciones::where('fecha', '=', 'curdate()')->count();
        $data = $request->charData;
        $pdf = PDFD::loadView('PDF/reporte', ['registros' => $registros, 'data' => $data, 'busqueda' => $busqueda, 'count' => $count, 'count_today' => $count_today]);
        return $pdf->download('Reporte de busqueda.pdf');
    }
}