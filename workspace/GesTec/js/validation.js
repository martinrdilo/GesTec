$(document).ready(function(){
    
    $("#contratar").click(function(e){
        //e.preventDefault();
        
        var usuario = $("#user").val();
        var contra = $("#pass").val();
        var contra2 = $("#pass2").val();
        
        
        ///////////USUARIO VALIDACION///////
        
        /////Espacios en blanco/////
        
        /*if(usuario == ""){
            $("#info_user").text("No puede dejar este campo en blanco").css("color", "red");
            e.preventDefault();
        }*/
        
        //////Min 5 letras/////
        
        /*if(usuario.length < 4){
            $("#info_user").text("El usuario debe contener mas de 4 letras").css("color", "red");
            e.preventDefault();
        }*/
        
        
        /////CONTRASEÑAS VALIDACION////
        
        /////Espacios en blanco/////
        
        /*if(contra == "" || contra2 == ""){
            $("#info_pass").text("No puede dejar este campo en blanco").css("color", "red");
            $("#info_pass2").text("No puede dejar este campo en blanco").css("color", "red");
            $("#info_pass").addclass("invalid");/*validate invalid*/
            /*$("#info_pass2").addclass("invalid");
            e.preventDefault();
        }*/
        
        if(contra != contra2){
            e.preventDefault();
            $("#info_pass").text("Las contraseñas no coinciden").css("color", "red");
            return false;
        } else {
             $("#alerta").text("Las contraseñas coinciden").css("color", "green");
             return true;
        }
        
        
        $.ajax({
           type: "POST",
           url: "contratado.php",
           data: {nombre: usuario, password: contra},
           
           
           beforeSend:function(){
               alert("Se estan procesando los datos");
           },
           
           success: function(data) {
               $("#contratar").hide();
               $("#respuesta").html("Datos ingresados"+data);
           }
       });
        
    });
    
});