$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "/cuestionario";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append(
			"<tr><td>"+value.identificacion+"</td><td>"
			+value.nombre+"</td><td>"
			+value.created_at+"</td><td>"+
			value.puesto+"</td><td>"+
			"<a target='_blank' href=" +'pdf/'+value.id+"><span class='btn btn-primary'>Ver Reporte</span></a>"+
			"<a href=" +'pdfd/'+value.id+"><span class='btn btn-success'>Descargar Reporte</span></a>"+"</td></tr>");
		});
	});
}

