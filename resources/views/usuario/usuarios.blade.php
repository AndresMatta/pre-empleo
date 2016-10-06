@extends('layouts.admin')
	@section('content')
	@include('usuario.modal')
	<div id="msj-eliminar" class="alert alert-danger alert-dismissible" role="alert" style="display: none;">
		<strong>Usuario eliminado correctamente</strong>
	</div>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos">
		</tbody>
	</table>
	@endsection

	@section('scripts')
		{!!Html::script('js/usuario.js')!!}
	@endsection