$("#registro").click(function(e){

var dato = $("#cuestionario").serialize();
var route = "{{route('cuestionario.store')}}";

	$.ajax({
		url: route,
		type: 'POST',
		data: dato ,

	success:function(){
			$("#msj-success").fadeIn();
		},
	error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}

})
}