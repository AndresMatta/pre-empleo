<?php

namespace Formulario\Http\Controllers;

use Illuminate\Http\Request;

use Formulario\Http\Requests;

class FrontController extends Controller
{
    //
    public function admin(){
        return view('admin.index');
   }
}
