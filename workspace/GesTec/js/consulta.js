$(document).ready(function(){
	
	 $('#form-consul').on('submit', function(e){
       e.preventDefault();
       var idCliente = $('#idCliente').val();
       var asunto = $('#asunto').val();
       var empresa = $('#empresa').val();
       var consulta_c = $('#consulta_c').val();
       ajax_consul = {
           "idCliente":idCliente,
           "asunto":asunto,
           "empresa":empresa,
           "consulta_c":consulta_c
       };
       
       $.ajax({
            url:'../paginas/consulta-ingresada.php',
        	type: 'POST',
        	 data:ajax_consul,
        	 beforeSend:function(){
        	     $('#submit').val("Enviando...");
        	 }
        }) 
        .done(function(data) {
            if (data=="1"){
                $('#submit').val("LA CONSULTA SE ENVIÓ CON ÉXITO");
                //$('#result').html("<span id='result'>Consulta enviada con éxito</span>").css("color","green");
                setTimeout(function(){
                    location.replace('?p=vista-cliente');}, 2000);
                
            } else {
                $('#result').html("<span id='result'>Error al enviar la consulta</span>").css("color","red");
                $('#submit').val("Enviar");
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
        
      
    }); 		 
			
});