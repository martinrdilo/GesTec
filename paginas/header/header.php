<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTec │ Gestor Reparaciones</title>
    <!--FUENTES-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Roboto" rel="stylesheet">
    <!--Estilos-->
    <!--<link rel="stylesheet" href="css/reset.css">-->
    <link rel="stylesheet" href="assets/materialize.css">
    <link rel="stylesheet" href="assets/css/mtrlz.css" type="text/css" />
    <!--JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script> <!--GOOGLE+-->

	<script>window.jQuery || document.write('<script src="../js/jquery.js">\x3C/script>')</script>
	<script src="js/materialize.js"></script>
	<script type="text/javascript" src="js/estilos.js"></script>
	<!--<script type="text/javascript" src="../js/validation.js"></script>-->

	
</head>
<body>
    <header class="container">
        <div class="row"> 
 
        <nav class="col l12 nav-wrapper">
            <div class="nav-wrapper orange lighten-1 row">
              <div class="col l2">
                  <a class="brand-logo " href="?p=inicio"><span class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>">GesTec</span></a>
              </div>
              
              <div class="col s12 m12 offset-l6 l4">
                  <ul id="nav-mobile" class="row">
                    <!--<div class="">-->
                    <li class="col hide-on-small-only m2 l4 <?php echo $pagina == 'informacion' ? 'active' : ''; ?>"><a href="?p=informacion" class=" waves-effect waves-light">Informacion</a></li>
                    <!--</div>-->
                    <!--<div class="">-->
                    <li class=" col s5 m4 l4 <?php echo $pagina == 'planes' ? 'active' : ''; ?>"><a href="?p=planes" class="waves-effect waves-light">Planes</a></li>
                    <!--</div>-->
                    <!--<div class="">-->
                    <li class="col offset-s3 s4 offset-m4 m2 l4 <?php echo $pagina == 'contacto' ? 'active' : ''; ?>"><a href="?p=contacto" class="waves-effect waves-light">Contacto</a></li>
                    <!--</div>-->
                  </ul>
              </div>
              
            </div>
        </nav>
        </div>
    </header>
<?php require("paginas/conexion.php"); ?>
    
    