<?php
	include("conexion.php");
	session_start();
	
	if (isset($_REQUEST["idOrden"])){
		echo "PHP idOrden: " . $_REQUEST["idOrden"];
	    //echo "user: " . $_REQUEST["user"] . "  pass: " . $_REQUEST["password"];
		$cs = "UPDATE ordenes SET idEstado = '1'
	            WHERE idOrden = '".$_REQUEST["idOrden"]."' ";
		if (mysqli_query($conexion, $cs)){
		    echo "Orden modificada con éxito";    
		}else{
		    echo mysqli_error();
		}
	}
	
?>