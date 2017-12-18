<?php
	include("conexion.php");
	session_start();
	
	if (isset($_REQUEST["idOrden"])){
		echo "PHP idOrden: " . $_REQUEST["idOrden"];
	    //echo "user: " . $_REQUEST["user"] . "  pass: " . $_REQUEST["password"];
		$cs = "UPDATE ordenes SET idEstado = '".$_REQUEST["estadoOrden"]."',
		                          idTipo = '".$_REQUEST["tipoOrden"]."',
		                          descripcion = '".$_REQUEST["descripcion"]."',
		                          diagnostico = '".$_REQUEST["diagnostico"]."',
		                          solucion = '".$_REQUEST["solucion"]."',
		                          precio = '".$_REQUEST["precio"]."'
	            WHERE idOrden = '".$_REQUEST["idOrden"]."' ";
		if (mysqli_query($conexion, $cs)){
		    echo "Orden modificada con éxito";    
		}else{
		    echo mysqli_error();
		}
	}
	
?>