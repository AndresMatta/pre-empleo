<?php

namespace Formulario\Http\Controllers;

use Illuminate\Http\Request;
use Formulario\Http\Requests;
use Formulario\Http\Requests\CuestionarioRequest;
use Illuminate\Support\Facades\Auth;
use Formulario\Cuestionario;

class CuestionarioController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       $cuestionario = Cuestionario::paginate(25);
       if($request->ajax()){
            return response()->json(view('formularios.forms.cuestionario',compact('cuestionario'))->render());
        }
        return view('formularios.consultas',compact('cuestionario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $medico = Auth::user()->name;
        return view('formularios.create', compact('medico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuestionarioRequest $request)
    {
        //
        Cuestionario::create($request->all());
        return redirect('/cuestionario')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cuestionario = Cuestionario::find($id);
        return view('formularios.edit', ['cuestionario'=>$cuestionario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

