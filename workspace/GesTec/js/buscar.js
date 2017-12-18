$(document).ready(function(){
   //Al escribr dentro del input con id="cliente"
    //$('#sugerencias_clientes').one('click', '.suggest-element a', function(){
                    //Editamos el valor del input con data de la sugerencia pulsada
    //                $('#cliente').val($(this).attr("data"));
                    //Hacemos desaparecer el resto de sugerencias
    //                $('#sugerencias_clientes').fadeOut(1000);
    //            });              
     
    //$('#cliente').keypress(function(){
        //Obtenemos el value del input
    //    var cliente = $(this).val();        
    //    var dataString = 'cliente='+cliente;

        //Le pasamos el valor del input al ajax
    //    $.ajax({
    //        type: "POST",
    //        url: "../paginas/buscarClientes.php",
    //        data: dataString,
            
    //        success: function(data) {
                //Escribimos las sugerencias que nos manda la consulta
    //            $('#sugerencias_clientes').fadeIn(1000).html(data);
                //Al hacer click en alguna de las sugerencias
                
    //        }
    //    });
    //});

    $('input.marca').empty().keypress(function(){
        var marca = $(this).val();        
        var dataString2 = 'marca='+marca;

        $.ajax({
            type: "POST",
            url: "../paginas/buscarMarcas.php",
            data: dataString2,
            success: function(data) {
                
                $('.input-field > div.sugerencias_marca').fadeIn(1000).html(data);
                $('.input-field > div.sugerencias_marca').on('click', '.suggest-element a', function(){
                    $('input.marca').val($(this).attr("data"));
                    $('.input-field > div.sugerencias_marca').fadeOut(1000);
                });   
            }
        });
    });   
    

    $('input.producto').empty().keypress(function(){
        var producto = $(this).val();        
        var dataString3 = 'producto='+producto;

        $.ajax({
            type: "POST",
            url: "../paginas/buscarProductos.php",
            data: dataString3,
            success: function(data) {
                
                $('.sugerencias_producto').fadeIn(1000).html(data);
                $('.sugerencias_producto').on('click','.suggest-element a', function(){
                    $('input.producto').val($(this).attr("data"));
                    $('.sugerencias_producto').fadeOut(1000);
                });              
            }
        });
    });   
               
    $('input.modelo').empty().keypress(function(){
        //Obtenemos el value del input
        var modelo = $(this).val();        
        var dataString = 'modelo='+modelo;

        //Le pasamos el valor del input al ajax
        $.ajax({
            type: "POST",
            url: "../paginas/buscarModelos.php",
            data: dataString,
            
            success: function(data) {
                //Escribimos las sugerencias que nos manda la consulta
                $('.sugerencias_modelo').fadeIn(1000).html(data);
                //Al hacer click en alguna de las sugerencias
                 //Al escribr dentro del input con id="modelo"
                $('.sugerencias_modelo').on('click', '.suggest-element a', function(){
                    //Editamos el valor del input con data de la sugerencia pulsada
                    $('input.modelo').val($(this).attr("data"));
                    //Hacemos desaparecer el resto de sugerencias
                    $('.sugerencias_modelo').fadeOut(1000);
                });   
            }
        });
    });
    
    
    $('input.cliente').empty().keypress(function(){
        var cliente = $(this).val();        
        var dataString4 = 'cliente='+cliente;

        $.ajax({
            type: "POST",
            url: "../paginas/buscarClientes.php",
            data: dataString4,
            success: function(data) {
                console.log("ENTRO AL AJAX CLIENTE");
                
                $('.sugerencias_cliente').fadeIn(1000).html(data);
                
                $('.sugerencias_cliente').on('click', '.suggest-element a',function(){
                    
                    $('input.cliente').val($(this).attr("data"));
                    
                    $('.sugerencias_cliente').fadeOut(1000);
                });   
            }
        });
    });  
    
    
    $('body').on('click', function() {
        $('.sugerencias_cliente').slideUp('fast');
        $('.sugerencias_marca').slideUp('fast');
        $('.sugerencias_producto').slideUp('fast');
        $('.sugerencias_modelo').slideUp('fast');
    });
    
   /* $("#enviarOrden").click(function() {
       // e.preventDefault();
        var datastring4 = $("#formNewOrder").serialize();
        
       /* var marca = $("#marca").val();
        var producto = $("#producto").val();
        var tTrabajo = $("#tTrabajo").val();
        var cliente = $("#cliente").val();
        var eTrabajo = $("#eTrabajo").val();
        var descripcionP = $("#desc_p").val();
        var diagnosticoP = $("#diag_p").val();
        var solucionP = $("#solucion_p").val();
        var precio = $("#desc_p").val();*/
        
        
        
        
        
    /*    $.ajax({
            type: "POST",
            url: "../paginas/NewOrder.php",
            data: datastring4,
            
            beforeSend:function(){
                $("#procesando").fadeIn(3000, "Su pedido se esta procesando...");
            },
            
            success: function(data) {
                $("#formNewOrder").hide();
                
                              
            }
        });
        
        
    })*/
    
});