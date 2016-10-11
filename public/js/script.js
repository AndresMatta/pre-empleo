$("#registro").click(function(){
	var username = $("#username").val();
	var name = $("#name").val();
	var email = $("#email").val();
	var tipo = $("#tipo").val();
	var password = $("#password").val();
	var route = "/usuario";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{username: username},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});
});