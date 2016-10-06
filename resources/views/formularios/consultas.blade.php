@extends('layouts.admin')
	@section('content')
	<table class="table">
		<thead>
			<th>Identificación</th>
			<th>Nombre</th>
			<th>Fecha</th>
			<th>Puesto</th>
			<th>Operaciones</th>
		</thead>
		<tbody id="datos">
		</tbody>
	</table>
	@endsection

	@section('scripts')
		{!!Html::script('js/consulta.js')!!}
	@endsection