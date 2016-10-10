<?php

namespace Formulario\Http\Controllers;

use Illuminate\Http\Request;

use Formulario\Http\Requests;
use Formulario\User;
use Formulario\Http\Requests\UsuarioRequest;
use Illuminate\Foundation\Auth\RegistersUsers;

class UsuarioController extends Controller
{

use RegistersUsers;

protected $username = 'username';

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $users = User::all();
            return response()->json($users);
        }
        return view('usuario.usuarios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        //
        $user = $request->all();

        User::create([
            'username' => $user['username'],
            'name' => $user['name'],
            'email' => $user['email'],
            'tipo' => $user['tipo'],
            'password' => bcrypt($user['password'])
        ]);

        return redirect('/admin')->with('message','store');
        
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
        $user = User::find($id);

        return response()->json($user);
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
        $user = User::find($id);
        $user = fill($request->all());
        $user->save();

        return response()->json([ "mensaje"=> "listo"]);
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
        $user = User::find($id);
        $user->delete();

        return response()->json(["mensaje" => "borrado"]);
    }
}
