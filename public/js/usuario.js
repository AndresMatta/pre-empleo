$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/usuario";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.name+"</td><td>"+value.tipo+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	var route = "http://localhost:8000/usuario/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-eliminar").fadeIn();
		}
	});
}

function Mostrar(btn){
	var route = "http://localhost:8000/usuario/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#username").val(res.username);
		$("#name").val(res.name);
		$("#email").val(res.email);
		$("#tipo").val(res.tipo);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(e){
	e.preventDefault();
	var value = $("#id").val();
	dataSerialize = $("#form_update").serialize();
	var route = "http://localhost:8000/usuario/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		data: dataSerialize,//{username: username, name: name , email: email, tipo:tipo},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});