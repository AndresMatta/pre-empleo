@extends('layouts.admin')
	@section('content')
	@if(Session::has('message'))
	<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	{{Session::get('message')}}
	</div>
	@endif
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Operaciones</th>
		</thead>
		@foreach($users as $user)
				<tbody>
					<td>{{$user->name}}</td>
					<td>{{$user->tipo}}</td>
					<td>
					{!!Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
					</td>
				</tbody>
				@endforeach
	</table>
	@endsection

