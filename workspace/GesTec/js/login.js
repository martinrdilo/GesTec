$(document).ready(function(){ 
   $('#formlog').on('submit', function(e){
       e.preventDefault();
       var user = $('#user').val();
       var password = $('#password').val();
       console.log(user);
       //console.log(pass);
       if (user.length > 0 && password.length > 0){
           $.ajax({
                url:'../paginas/logueando.php',
            	type: 'POST',
            	 data:{user:user, password:password},
            	 beforeSend:function(){
            	     $('#submit').val("Ingresando...");
            	 }
            }) 
            .done(function(data) {
                //$('#submit').val("Iniciar sesión");
                
                if (data=="3"){
                    location.replace('?p=vista-cliente');
                }
                else if (data=="2"){
                    location.replace('?p=vista-admin');
                } else {
                    
                    $('#result').html("<span id='result'>Nombre de Usuario o contraseña invalido</span>").css("color","red");
                    $('#submit').val("Iniciar sesión");
                }
            })
            .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); 
                    alert("Error: " + errorThrown); 
            })
            .always(function(data) {
            	console.log(data);
                console.log("Complete");
            });
        }
      
    }); 
});

