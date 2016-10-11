<?php

namespace Formulario\Http\Controllers;

use Illuminate\Http\Request;

use Formulario\Http\Requests;
use Formulario\Cuestionario;

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
    
    public function invoice($id) 
    {
        $cuestionario = Cuestionario::find($id);
        $view =  \View::make('formularios.forms.ejemplo', compact('cuestionario'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }

     public function descargar($id) 
    {

        $cuestionario = Cuestionario::find($id);
        $nombre = $cuestionario['nombre'];
        $view =  \View::make('formularios.forms.ejemplo', compact('cuestionario'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download($nombre.'.pdf');
    }
}
