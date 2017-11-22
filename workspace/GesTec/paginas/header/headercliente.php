<?php
session_start() /*Podria arreglarse tambien guardando el doc en codificacion ANSII*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTec │ Gestor Reparaciones</title>
    <!--FUENTES-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto" rel="stylesheet">-->
    <!--Estilos-->
    <!--<link rel="stylesheet" href="css/reset.css">-->
    <!--DATATABLES-->
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/rowReorder.dataTables.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/responsive.dataTables.min.css" type="text/css" />
    <!--MATERIALIZE-->
    <link rel="stylesheet" href="../assets/materialize.css">
    <link rel="stylesheet" href="../assets/css/mtrlz.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/admin-cliente.css" type="text/css"/>
    <!--JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/jquery.js">\x3C/script>')</script>
	<script src="../js/materialize.js"></script>
	<!--DATATABLES-->
	<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.responsive.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
    	    $('#table_unoc').DataTable({
    	        "pageLength": 2,
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
    	    $('#table_dosc').DataTable({
    	        "pageLength": 2,
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
    	    $('#table_tresc').DataTable({
    	        "pageLength": 2,
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
<div class="row">
        <header class="col s12 m12 l12">
               <div id="nav">
                   <div class="navbar-fixed">
                        <nav class="orange">
                            <div class="row">
                                <div class="nav-wrapper container left col l2 hide-on-small-only">
                                    <a href="?p=vista-cliente" class="brand-logo">GesTec</a>
                                </div>
                                <div class="nav-wrapper col s6 m3 offset-l6 l2 container">
                                    <div class="row">
                                        <?php
                                        if($_REQUEST["p"] != "vista-cliente"){
                                        ?>
                                        <div class="col offset-s1 s2 offset-m1 m2 offset-l8 l2 tooltipped" data-position="buttom" data-delay="50" data-tooltip="volver" id="uno"><a href="?=vista-cliente"><i class="material-icons">reply</i></a></div>
                                        <?php
                                        }
                                        
                                        else if($_REQUEST["p"] != "consulta") {
                                            
                                        ?>
                                        <div class="col offset-s1 s2 offset-m1 m2 offset-l8 l2 tooltipped" data-position="buttom" data-delay="50" data-tooltip="Descripcion"><a href="?p=nueva-orden"><i class="material-icons">description</i></a></div>
                                        <?php
                                        }
                                        ?>
                                        <div class="col s2 m2 l2 tooltipped" data-position="buttom" data-delay="50" data-tooltip="Consulta"><a href="?p=consulta"><i class="material-icons">email</i></a></div>
                                        
                                    </div> 
                                </div>
                                <div class="nav-wrapper container col s6 offset-m5 m4 l2">
                                    <div class="row ">
                                        <span class="col hide-on-med-and-down offset-l1 l1">│</span>
                                        <div class="col offset-s2 s2 offset-m3 m2 l2 tooltipped" data-position="left" data-delay="50" data-tooltip="Notificaciones"><i class="material-icons">notifications</i></div>
                                        <div class="col s2 m2 l2"><a href="?="><i class="material-icons">account_circle</i></a></div>
                                        <div class="col s2 m2 l2"><a href="?="><i class="material-icons">help_outline</i></a></div>
                                        <div class="col s2 m2 l2 tooltipped" data-position="left" data-delay="50" data-tooltip="Salir"><a href="?p=logout"><i class="material-icons">exit_to_app</i></a></div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
        </header>
        