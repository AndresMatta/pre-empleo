	<table class="table">
			<thead>
				<th>Identifacion</th>
				<th>Nombre</th>
				<th>Fecha</th>
				<th>Puesto</th>
				<th>Operacion</th>
			</thead>
				@foreach($cuestionario->sortByDesc('created_at') as $c1)
				<tbody>
					<td>{{$c1->identificacion}}</td>
					<td>{{$c1->nombre}}</td>
					<td>{{$c1->created_at}}</td>
					<td>{{$c1->puesto}}</td>
					<td>
					<a target='_blank' href="pdf/{{ $c1->id }}"><span class='btn btn-primary'>Ver Reporte</span></a>
					</td>
					<td>
					<a target='_blank' href="pdfd/{{ $c1->id }}"><span class='btn btn-success'>Descargar Reporte</span></a>
					</td>
				</tbody>
				@endforeach
		</table>
	{!! $cuestionario->render(); !!}