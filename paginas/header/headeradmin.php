<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTec │ Gestor Reparaciones</title>
    <!--FUENTES-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto" rel="stylesheet">
    <!--Estilos-->
    <!--<link rel="stylesheet" href="css/reset.css">-->
    <!--GOOGLE-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--DATATABLES-->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/rowReorder.dataTables.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/responsive.dataTables.min.css" type="text/css" />
    <!--MATERIALIZE-->
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" href="assets/css/mtrlz.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/admin-cliente.css" type="text/css"/>
    
    <!--JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.js">\x3C/script>')</script>
	<script src="js/materialize.js"></script>
	<!--DATATABLES-->
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function(){       //WTFFFFF
    	    $('#table_uno').DataTable({
    	        
    	        "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
    	    });
    	    $('#table_dos').DataTable({
    	        
    	        "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
    	    });
    	    $('#table_tres').DataTable({
    	        
    	        "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
    	    });
	    });
	</script>
	
</head>


<body>
    <div class="row">
        <header class="col s12 m12 l12 empresa orange">
               <div id="nav">
                   <div class="navbar-fixed">
                        <!-- Dropdown ESTRUCTURA -->
                        <ul id="dropdown1" class="dropdown-content">
                            <li class="blue-grey lighten-5"><h6>&nbsp; Tienes 3 notificaciones nuevas &nbsp; </h6></li>
                            <li class="divider"></li>
                            <li><a href="#!">Alberto tiene una consulta.. </a></li>
                            <li><a href="#!">Martin no esta de acuerdo..</a></li>
                            <li><a href="#!">Recibio un mensaje de..</a></li>
                            <li><a href="#!">Faltan 6 dias para..</a></li>
                        </ul>
                        <nav class="orange">
                            <div class="nav-wrapper">
                                <a href="?p=vista-admin" class="brand-logo">GesTec</a>
                                <ul class="right hide-on-small-only">
                                  
                                    <?php if($_REQUEST["p"] != "vista-admin") :  ?>
                                        <li><a href="?p=vista-admin"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Volver">reply</i></a></li>
                                    <?php endif; ?>
                                    <?php if($_REQUEST["p"] != "vista-cliente") : ?>
                                        <li><a href="?p=nuevo-cliente"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Agregar cliente">person_add</i></a></li>
                                    <?php endif; ?>
                                    <li><a href="?p=lista-clientes"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Lista de clientes">person</i></a></li>
                                    <li><a href="?p=nueva-orden"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Nueva orden">note_add</i></a></li>
                                    <li><a href="?p=consulta-admin"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Consulta">email</i></a></li>
                                    <li><span>│</span></li>
                                    <li> <!-- Dropdown NOTIFICACIONES --> <a class="dropdown-button orange"  href='#' data-activates="dropdown1" data-constrainwidth="false"><i class="material-icons tooltipped" data-position="buttom" data-delay="100" data-tooltip="Notificaciones">notifications_active</i></a></li>
                                    <li><a href="#"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Cuenta">account_circle</i></a></li>
                                    <li><a href="#"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Ayuda">help_outline</i></a></li>
                                    <li><a href="?p=logout"><i class="material-icons right tooltipped" data-position="buttom" data-delay="50" data-tooltip="Cerrar Sesión">exit_to_app</i></a></li>

                                    



                                </ul>
                                
                                <!--
                                <div class="nav-wrapper container left col l2 hide-on-small-only">
                                    <a href="?=empresa" class="brand-logo">GesTec</a>
                                </div>
                                <div class="nav-wrapper container col s4 m4 offset-l4 l3 ">
                                    <div class="row">
    
                                        <?php if($_REQUEST["p"] != "vista-admin") :  ?>
                                            <div id="filauno" class="col s3 m2 offset-l4 l2 tooltipped iconEm" data-position="buttom" data-delay="50" data-tooltip="Volver"><a href="?p=vista-admin"><span class="icon-primero"><i class="material-icons right">reply</i></span><span class="icon-primero"><i class="material-icons right cyan-text text-darken-4" style="display: none">reply</i></span></a></div>
                                        
                                        <?php endif; ?>
                                        <?php if($_REQUEST["p"] != "vista-cliente") : ?>
                                            <div class="col s3 m2 offset-l4 l2 tooltipped iconEm" data-position="buttom" data-delay="50" data-tooltip="Agregar cliente"><a href="?p=nuevo-cliente"><span class="icon-primero"><i class="material-icons right">person_add</i></span><span class="icon-primero"><i class="material-icons right cyan-text text-darken-4" style="display: none">person_add</i></span></a></div>
                                        
                                        <?php endif; ?>
                                        <div id="filados" class="col s3 m2 l2 tooltipped iconEm2" data-position="buttom" data-delay="50" data-tooltip="Lista de clientes"><a href="?p=lista-clientes"><span class="icon-segundo"><i class="material-icons right">person</i></span><span class="icon-segundo"><i class="material-icons right cyan-text text-darken-4" style="display: none">person</i></span></a></div>
                                        
                                        <div id="filatres" class="col s3 m2 l2 tooltipped iconEm3" data-position="buttom" data-delay="50" data-tooltip="Nueva orden"><a href="?p=nueva-orden"><span class="icon-tercero"><i class="material-icons right">note_add</i></span><span class="icon-tercero"><i class="material-icons right cyan-text text-darken-4" style="display: none">note_add</i></span></a></div>


                                        <div id="filacuatro" class="col s3 m2 l2 tooltipped iconEm4" data-position="buttom" data-delay="50" data-tooltip="Consulta"><a href="?p=consulta-admin"><span class="icon-cuarto"><i class="material-icons right">email</i></span><span class="icon-cuarto"><i class="material-icons right cyan-text text-darken-4" style="display: none">email</i></span></a></div>

                                    </div>
                                </div>
                                <div class="nav-wrapper container col offset-s2 s6 offset-m2 m6 l3">
                                    <div class="row">
                                        
                                        
                                        <!- Dropdown NOTIFICACIONES ->
                                        <div class="col offset-s1 s2 offset-m4 m1 l2 tooltipped hide-on-small-only" data-position="buttom" data-delay="100" data-tooltip="Notificaciones"><a class="dropdown-button orange" href='#' data-activates="dropdown1" data-constrainwidth="false"><i class="material-icons" style="display:none;">notifications</i><span class="new badge red">3</span><i class="material-icons">notifications_active</i></a></div>

                                        <!- Dropdown ESTRUCTURA ->
                                        <ul id="dropdown1" class="dropdown-content">
                                            <li class="blue-grey lighten-5"><h6>&nbsp; Tienes 3 notificaciones nuevas &nbsp; </h6></li>
                                            <li class="divider"></li>
                                            <li><a href="#!">Alberto tiene una consulta.. </a></li>
                                            <li><a href="#!">Martin no esta de acuerdo..</a></li>
                                            <li><a href="#!">Recibio un mensaje de..</a></li>
                                            <li><a href="#!">Faltan 6 dias para..</a></li>
                                        </ul>
                                        <div class="col offset-s5 s2 m2 l1 tooltipped iconEm5" data-position="buttom" data-delay="50" data-tooltip="Cuenta"><a href="?="><span class="icon-quinto"><i class="material-icons right">account_circle</i></span><span class="icon-quinto"><i class="material-icons right cyan-text text-darken-4" style="display: none">account_circle</i></span></a></div>

                                        <div class="col s2 m2 l2 tooltipped iconEm7" data-position="buttom" data-delay="50" data-tooltip="Ayuda"><a href="?="><span class="icon-septimo"><i class="material-icons right">help_outline</i></span><span class="icon-septimo"><i class="material-icons right cyan-text text-darken-4" style="display: none">help</i></span></a></div>

                                        <div class="col s2 m2 l2 tooltipped iconEm6" data-position="buttom" data-delay="50" data-tooltip="Salir"><a href="?p=logout"><span class="icon-sexto"><i class="material-icons right">exit_to_app</i></span><span class="icon-sexto"><i class="material-icons right cyan-text text-darken-4" style="display: none">exit_to_app</i></span></a></div>
                                    </div>
                                </div>
                            -->
                            </div>
                        </nav>
                    </div>
                </div>
        </header>
        
<script type="text/javascript">
        $(document).ready(function(){
        //       var URL = window.location.search; //Captura query string href
        
        // $("body").change(function(){
        //   if ($(this).val("URL")) {
        //       $("filauno").hide();
               
        //   } 
        
        
        // });  
        
              
              
        /*
        $(".iconEm").on("click", function() {
            $(".icon-primero > i").toggle();
            if ($(this).attr("active")){
                $(".icon-segundo > i").stop();
                $(".icon-tercero > i").stop();
                $(".icon-cuarto > i").stop();
                $(".icon-sexto > i").stop();
            }
        });
        $(".iconEm2").on("click", function() {
            $(".icon-segundo > i").toggle();
            if ($(this).attr("active")){
                $(".icon-primero > i").stop();
                $(".icon-tercero > i").stop();
                $(".icon-cuarto > i").stop();
                $(".icon-sexto > i").stop();
            }
        });
        $(".iconEm3").on("click", function() {
            $(".icon-tercero > i").toggle();
            if ($(this).attr("active")){
                $(".icon-primero > i").stop();
                $(".icon-segundo > i").stop();
                $(".icon-cuarto > i").stop();
                $(".icon-sexto > i").stop();
            }
        });
        
        $(".iconEm4").on("click", function() {
            $(".icon-cuarto > i").toggle();
            if ($(this).attr("active")){
                $(".icon-primero > i").stop();
                $(".icon-segundo > i").stop();
                $(".icon-tercero > i").stop();
                $(".icon-sexto > i").stop();
            }
        });
        
        $(".iconEm6").on("click", function() {
            $(".icon-sexto > i").toggle();
            if ($(this).attr("active")){
                $(".icon-primero > i").stop();
                $(".icon-segundo > i").stop();
                $(".icon-tercero > i").stop();
                $(".icon-cuarto > i").stop();
                
            }
        });
        */
        });

</script>