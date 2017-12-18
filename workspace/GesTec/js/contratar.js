
$(document).ready(function(){
	// formContratar();
// });
	
// function formContratar(){	
	$('#contratar').on("submit", function(e) {
		e.preventDefault();
		
		/*Planes*/
		var id_plan = $("#id_plan").val();
		/*Persona*/
		var nombre_p = $("#nombre_p").val();
		var apellido_p = $("#apellido_p").val();
		var email_p = $("#email_p").val();
		var cargo_p = $("#cargo_p").val();
		var tel_p = $("#tel_p").val(); 
		/*Empresa*/
		var nombre_em = $("#nombre_em").val();
		var rubro_em = $("#rubro").val();
		var email_em = $("#email_em").val();
		var tel_em = $("#tel_em").val();
		var direccion_em = $("#direccion_em").val();
		var ciudad_em = $("#ciudad_em").val();
		var provincia_em = $("#provincia_em").val();
		var pais_em = $("#pais_em").val();
		var comentario = $("#comentario_gral").val();
		/*Usuario*/
		var user = $("#user").val();
		var password = $("#password").val();
		var repassword = $("#repassword").val();
		// var dataString = $("#contratar").serialize();
		dataString = {
				"id_plan":id_plan,
                "nombre_p":nombre_p,
                "apellido_p":apellido_p,
                "email_p":email_p,
                "cargo_p":cargo_p,
                "tel_p":tel_p,
                "nombre_em":nombre_em,
                "rubro":rubro_em,
                "email_em":email_em,
                "tel_em":tel_em,
                "direccion_em":direccion_em,
                "ciudad_em":ciudad_em,
                "provincia_em":provincia_em,
                "pais_em":pais_em,
                "comentario_gral":comentario,
                "user":user,
                "password":password,
                "repassword":repassword,
            };
			
	// if (validarPass()) {
		$.ajax({
			url: '../paginas/contratado.php',
			type: 'POST',
			// dataType: json,
			data: dataString,
			beforeSend: function(){
				console.log("Enviando los datos a la DB");
			}
		})
		.done(function(data) {
			if (data==1) {
				$("#exito").show();
				
			} else if (data==0) {
				alert(data);
				$("#fracaso").show();
			} 
			
			//$('#contratar')[0].reset();//se reinicia al terminar el ingreso de datos
			
			
		})
		.fail(function(XMLHttpRequest, textStatus, errorThrown) { 
    	alert("Status: " + textStatus); 
    	alert("Error: " + errorThrown); 
		})
		.always(function(data) {
		console.log(data);
		console.log("Complete");
		})
	});	
	
});
	









					//VALIDA EMAIL
				function validateEmail(email) {
    					var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    					return re.test(email);
				}
			 


				function validarPass() {
						var password = $("#password").val();
						var repassword = $("#repassword").val();
			 		
					/*VALIDACION PASSWORD*/
					if (password != repassword) {
						alert("Las contraseñas no coinciden");
						
						return false;
					} else {
						return true;
					}
				}
				
