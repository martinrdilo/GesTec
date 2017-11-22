	<main>
		<section class="container">
	 		<div class="section" id="wrapper-plan">
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
				
				    $idAdmin=$_SESSION['idUsuario'];
					
				/////////////////INSERTAR EN BASE DE DATOS USUARIOS///////////
				
				$insertarUser= "INSERT INTO usuarios (idTipoUsuario, nombre, apellido, email, nombreUsuario, password, telefono) 
				VALUES ('3', '$nombre','$apellido','$email','$user','$pass','$tel')";
				
				$cUser=mysqli_query($conexion, $insertarUser);
				if (!$cUser){
				    printf("Error: %s\n", mysqli_error($conexion)); 
				}
				$cs = mysqli_query($conexion, "SELECT idUsuario FROM usuarios WHERE usuarios.idUsuario = LAST_INSERT_ID()");
				if ($r = mysqli_fetch_array($cs)){
					$idCliente = $r["idUsuario"];
				}
				
				
				$insertarCliente = "INSERT INTO clientes (idUsuario) VALUES ($idCliente)";
				
				$cCliente=mysqli_query($conexion, $insertarCliente);
				if (!$cCliente){
				    printf("Error: %s\n", mysqli_error($conexion));
				}
				
				$insertarAdmCli = "INSERT INTO admins_clientes (idCliente, idAdmin) VALUES ('$idCliente', '$idAdmin')";
		        $cAdmCli=mysqli_query($conexion, $insertarAdmCli);
		        if(!$cAdmCli){
		            printf("Error: %s\n" , mysqli_error($conexion));
		        }
				
				if($cUser && $cCliente && $insertarAdmCli) {
				    printf("El cliente $nombre $apellido se ha registrado con éxito. <br> Gracias");
				    header('Location: ?p=lista-clientes');
				}
				
				?>
	 			
	 		</div>
	 	</section>
	</main>
