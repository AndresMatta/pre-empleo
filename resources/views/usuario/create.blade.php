@extends('layouts.admin')

   @section('content')
   
   {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
   
   <div id="msj-success" class="alert alert-success" role="alert" style="display: none;">
   		<strong>Usuario creado correctamente</strong>
   </div>

   <div class="col col-md-6">
   <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
   @include('usuario.forms.create')
   {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
   {!!Form::close()!!}
   </div>
   @endsection

   
   