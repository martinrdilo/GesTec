$(document).ready(function() {
        $('select').material_select(); 
        $(".button-collapse").sideNav();
        $('.modal').modal();
        $('#push,secton').pushpin({ top:$('#push').height() });
        
         
        //BOTON ACTUALIZAR EN EDITAR ORDEN DE TRABAJO DESDE LA VISTA DE ADMINISTRADOR
        $('.actualizar').off('click').on('click', function(e){
            e.preventDefault();
            var tid = $(this).attr("data-id");
            console.log(tid);
            var idOrden = $('#formEdit' + tid + ' .idOrden').val();
            console.log("id orden: " + idOrden);
            var tipoOrden = $('#formEdit' + tid + ' .tipoOrden option:checked').val();
            console.log("tipo orden: " + tipoOrden);
            var estadoOrden = $('#formEdit' + tid + ' .estadoOrden option:checked').val();
            console.log("estado orden: " + estadoOrden);
            var descripcion = $('#formEdit' + tid + ' .descripcion').val();
            var diagnostico = $('#formEdit' + tid + ' .diagnostico').val();
            var solucion = $('#formEdit' + tid + ' .solucion').val();
            var precio = $('#formEdit' + tid + ' .precio').val();
            ajax_data = {
                "idOrden":idOrden,
                "tipoOrden":tipoOrden,
                "estadoOrden":estadoOrden,
                "descripcion":descripcion,
                "diagnostico":diagnostico,
                "solucion":solucion,
                "precio":precio
            };
            
            $.ajax({
                url:'paginas/modificar-orden.php',
                type: 'POST',
                data: ajax_data,
                
                })
                .done(function(data){
                    //location.replace('?p=empresa');
                   //setTimeout(location.reload.bind(location), 100);
                    console.log("Orden modificada con éxito");
                })
                .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Error"); 
                })
                .always(function(data){
                    console.log("Complete");
                });
                
    });   
    
    
//Flechitas de las tablas en vista administrador
$(".opcion").on("click", function() {
    
    $(".primero > i").toggle();
    if ($(this).attr("active")){
    $(".segundo > i").stop();
    $(".tercero > i").stop();
    }
});

$(".opcion2").on("click", function() {
    
    $(".segundo > i").toggle();
    if ($(this).attr("active")){
    $(".primero > i").stop();
    $(".tercero > i").stop();
    }
});

$(".opcion3").on("click", function() {
    
    $(".tercero > i").toggle();
    if ($(this).attr("active")){
    $(".primero > i").stop();
    $(".segundo > i").stop();
    }
});


    /*var URL = window.location.search; //Captura query string href
        
        $("body").change(function(){
           if ($(this).val("URL")) {
               $("filauno").hide();
               
           } 
        });  

        /*activates.css({
          position: 'absolute',
          top: origin.offset().top + verticalOffset + scrollYOffset,
          left: leftPosition + scrollXOffset
        });*/
              

 
    //Boton aceptar ordenes de trabajo con estado "En espera de aprobacion" en vista clientes    
    $('.aceptar-ord').off('click').on('click', function (e) {
        e.preventDefault();
        var idOrden = $(this).attr("data-id");
        $.ajax({
                url:'paginas/aceptar-orden.php',
                type: 'POST',
                data: {idOrden:idOrden}
                
                })
                .done(function(data){
                    //location.replace('?p=empresa');
                   setTimeout(location.reload.bind(location), 100);
                   console.log("id orden: " + idOrden);
                    console.log("Orden aceptada con éxito");
                })
                .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Error"); 
                })
                .always(function(data){
                    console.log("Complete");
                });
        
    });
    
    //Boton rechazar ordenes de trabajo con estado "En espera de aprobacion" en vista clientes    
    $('.rechazar-ord').off('click').on('click', function (e) {
        e.preventDefault();
        var idOrden = $(this).attr("data-id");
        $.ajax({
                url:'paginas/rechazar-orden.php',
                type: 'POST',
                data: {idOrden:idOrden}
                
                })
                .done(function(data){
                    //location.replace('?p=empresa');
                   setTimeout(location.reload.bind(location), 100);
                    console.log("Orden aceptada con éxito");
                })
                .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Error"); 
                })
                .always(function(data){
                    console.log("Complete");
                });
        
    });
    
    
    
    
    $(document).ready(function(){ 
        $('#formNewOrder').on('submit', function(e){
           e.preventDefault();
           var marca = $('#marca').val();
           var producto = $('#producto').val();
           var tTrabajo = $('#tTrabajo').val();
           var cliente = $('#cliente').val();
           var eTrabajo = $('#eTrabajo').val();
           var desc_p = $('#desc_p').val();
           var diag_p = $('#diag_p').val();
           var solucion_p = $('#solucion_p').val();
           var precio_p = $('#precio_p').val();
           ajax_data = {
                "marca":marca,
                "producto":producto,
                "tTrabajo":tTrabajo,
                "cliente":cliente,
                "eTrabajo":eTrabajo,
                "desc_p":desc_p,
                "diag_p":diag_p,
                "solucion_p":solucion_p,
                "precio_p":precio_p,
                "diag_p":diag_p
            };
           //console.log(pass);
           if (user.length > 0 && password.length > 0){
               $.ajax({
                    url:'paginas/orden-ingresada.php',
                	type: 'POST',
                	 data: ajax_data,
                })
                .done(function(data) {
                    //$('#submit').val("Iniciar sesión");
                    if (data=="3"){
                        location.replace('?p=lista-clientes');
                    }
                    else if (data=="2"){
                        location.replace('?p=vista-admin');
                    } else {
                        
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
    
    $('#diagnostico').characterCounter();
    $('#solucion').characterCounter();
    
});