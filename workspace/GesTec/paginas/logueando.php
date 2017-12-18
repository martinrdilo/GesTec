<?php
	include("conexion.php");
	session_start();
	
	if (isset($_REQUEST["user"])){ 
	    //echo "user: " . $_REQUEST["user"] . "  pass: " . $_REQUEST["password"];
	    
	    /*$usuario = mysqli_real_escape_string($_REQUEST["user"]);
	    $usuario = strip_tags($_REQUEST["user"]); 
	    $usuario = trim($_REQUEST["user"]);
	    
	    $password = mysqli_real_escape_string($_REQUEST["password"]);
	    $password = strip_tags($_REQUEST["password"]);
	    $password = trim($_REQUEST["password"]);*/
	    
	    
	    
		$cs = "SELECT nombre, apellido, idUsuario, idTipoUsuario FROM usuarios WHERE nombreUsuario='".$_REQUEST["user"]."' AND password='".$_REQUEST["password"] ."' ";
		$rs = mysqli_query($conexion, $cs);
		if (!$rs){
			mysqli_error($conexion);
			echo "error";
			//echo "<script type='text/javascript'> console.log('NO SE EJECUTA VARIABLE RS'); </script>";
		}else {
			if (mysqli_num_rows($rs)==1) {  //pregunta si hay un y solo un resultado con la consulta anterior
				$datos = mysqli_fetch_assoc($rs);
				//Variables de sesion
				$_SESSION["idUsuario"] = $datos["idUsuario"];
				$_SESSION["idTipoUsuario"] = $datos["idTipoUsuario"];
				$_SESSION["nombre"] = $datos["nombre"];
				$_SESSION["apellido"] = $datos["apellido"];
				//echo "<script type='text/javascript'> alert('LOGUEO CON EXITO'); </script>";
				//Si usuario es tipo admin que vaya a vista-admin.php, si es tipo cliente que vaya a vista-cliente.php
				if ($_SESSION["idTipoUsuario"]==2){
				
					$cs2 ="SELECT idRubro FROM administradores WHERE idUsuario = '".$datos["idUsuario"]."' ";
					$rs2 = mysqli_query($conexion, $cs2);
					if (!$rs2){
						echo "error: " . mysqli_error($conexion);;
					}
					$idRubro = mysqli_fetch_assoc($rs2);
					$_SESSION["idRubro"] = $idRubro["idRubro"];
					echo 2;
					$cs_fecha = "UPDATE usuarios SET ultimoIngreso = NOW() WHERE idUsuario = '".$_SESSION["idUsuario"]."' ";
					$q_fecha = mysqli_query($conexion, $cs_fecha);
					if (!$q_fecha){
						mysqli_error($conexion);
					}
					//echo "<script type='text/javascript'> location.href='?p=empresa'; </script>";
				} else if ($_SESSION["idTipoUsuario"]==3){
					echo 3;
					$cs_fecha = "UPDATE usuarios SET ultimoIngreso = NOW() WHERE idUsuario = '".$_SESSION["idUsuario"]."' ";
					$q_fecha = mysqli_query($conexion, $cs_fecha);
					if (!$q_fecha){
						mysqli_error($conexion);
					}
					//echo "<script type='text/javascript'> location.href='?p=vista-cliente'; </script>";
				}
			} else { //Error al escribir nombre de usuario y pass o trajo mas de un usuario
				//echo "<script type='text/javascript'> console.log('NUM ROW ES DISTINTO DE 1'); </script>";
				//echo "<script type='text/javascript'> alert('User Name Or Password Invalid!'); </script>";
			}
		}
	}
	
?>