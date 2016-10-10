@extends('layouts.app')
	@section('content')
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <p><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"> 
        </i> Ha ocurrido un error en la validación</p>
    </div>
@endif
	{!!Form::open(['route'=>'cuestionario.store', 'method'=>'POST', 'class'=>'formulario'])!!}
	@include('formularios.forms.create')
	{!!Form::close()!!}
@endsection