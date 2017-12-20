<?php 
	session_start();


	///////////////////DATOS PERSONA/////////////////
		$nombre=$_REQUEST['nombre'];
		$apellido=$_REQUEST['apellido'];
		$email=$_REQUEST['email'];
		$tel=$_REQUEST['telefono'];
		
	//////////////////DATOS LOGIN//////////////////////////
        $user=$_REQUEST['user'];
		$pass=$_REQUEST['password'];
		
	//////////////////DATOS LOGIN//////////////////////////
	
	    $idCliente=$_REQUEST['id'];
		
	/////////////////INSERTAR EN BASE DE DATOS USUARIOS///////////
	
	$updateUser= "UPDATE usuarios SET nombre = '$nombre',
									 apellido = '$apellido', 
									 email = '$email',
									 nombreUsuario = '$user',
									 password = '$pass',
									 telefono = '$tel' 
					WHERE idUsuario = '$idCliente' ";
	
	$rsUpdateUser=mysqli_query($conexion, $updateUser);
	if (!$rsUpdateUser){
	    printf("Error: %s\n", mysqli_error($conexion)); 
	} else {
		printf("El cliente $nombre $apellido se ha registrado con éxito. <br> Gracias");
	    header('Location: ?p=lista-clientes');
	}

	
?>