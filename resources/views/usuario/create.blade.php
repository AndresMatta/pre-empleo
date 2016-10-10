@extends('layouts.admin')

   @section('content')
   @if (count($errors) > 0)
    <div class="alert alert-danger">
        <p><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"> 
        </i> Ha ocurrido un error en la validación</p>
    </div>
   @endif
   
   {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

   <div class="col col-md-6">
   <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
   @include('usuario.forms.create')
   {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
   {!!Form::close()!!}
   </div>
   @endsection

   
   