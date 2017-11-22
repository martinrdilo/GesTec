	 			<?php
	 			include("conexion.php");
				///////////////////DATOS PERSONA/////////////////
					$nombrePersona= strip_tags(trim($_REQUEST['nombre_p']));
					$apellidoPersona= strip_tags(trim($_REQUEST['apellido_p']));
					$emailPersona= strip_tags(trim($_REQUEST['email_p']));
					$cargoPersona= strip_tags(trim($_REQUEST['cargo_p']));
					$telPersona= strip_tags(trim($_REQUEST['tel_p']));
					
				//////////////////DATOS EMPRESA//////////////////

					$nombreEmpresa= strip_tags(trim($_REQUEST['nombre_em']));
					$emailEmpresa= strip_tags(trim($_REQUEST['email_em']));
					$telEmpresa= strip_tags(trim($_REQUEST['tel_em']));
					$dirEmpresa= strip_tags(trim($_REQUEST['direccion_em']));
					$ciudadEmpresa= strip_tags(trim($_REQUEST['ciudad_em']));
					$provEmpresa= strip_tags(trim($_REQUEST['provincia_em']));
					$paisEmpresa= strip_tags(trim($_REQUEST['pais_em']));
					$comentariosGral= strip_tags(trim($_REQUEST['comentario_gral']));
					$id_plan= $_REQUEST["id_plan"];
					$id_rubro= $_REQUEST["rubro"];
					
				//////////////////DATOS LOGIN//////////////////////////
					$nombreUsuario= strip_tags(trim($_REQUEST["user"]));
					$passUsuario= strip_tags(trim($_REQUEST["password"]));
					$repassUsuario= strip_tags(trim($_REQUEST["repassword"]));
					
					
					
				//////////////FORMULARIO REGISTRO/////////
				
				// if(isset($_REQUEST['ENVIAR'])){
					
				//////////////SANIAMIENTO Y VALIDACIONES///////
				
				/*NOMBRE*/
					
					
				// 	if (isset($nombrePersona) && !empty($nombrePersona)){
				// 	$nombrePersona= mysqli_real_escape_string($conexion,$nombrePersona);
				// 	$nombreSan = filter_var($nombrePersona, FILTER_SANITIZE_STRING);	
				// 		// $nombreSan = strtolower($nombreSan);
				// 		$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/"));
				// 		$nombreLimpio = filter_var($nombreSan, FILTER_VALIDATE_REGEXP,$nameRegex);
				// 		if ($nombreLimpio === false) {
				// 			echo "invalido:".$nombreLimpio;
							
				// 		} else {
				// 			echo $nombreLimpio;
							
				// 		}
				// 	} else {
				// 		echo "carateres invalidos";
				// 	}
					
					
				// /*APELLIDO*/
				// 	$apellidoSan = filter_var($apellidoPersona, FILTER_SANITIZE_STRING);
				// 	$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/"));
				// 	if (isset($apellidoPersona) && !empty($apellidoPersona) && filter_var($apellidoSan, FILTER_VALIDATE_REGEXP,$nameRegex)){
				// 		$apellidoPersona= mysqli_real_escape_string($conexion,$apellidoPersona);
						
				// 		// $apellidoSan = strtolower($apellidoSan);
						
						
				// 		if ($apellidoSan === false) {
				// 			echo 0;
				// 		} else {
				// 			echo 1;
				// 		}
				// 	} else {
				// 		echo "apellido invalido";
				// 	}
					
				// /*CORREO ELECTRONICO*/
					
				// 	$emailSan = filter_var($emailPersona, FILTER_SANITIZE_EMAIL);
				// 	if (isset($emailPersona) && !empty($emailPersona) && filter_var($emailSan, FILTER_VALIDATE_EMAIL)){
				// 		$emailPersona= mysqli_real_escape_string($conexion,$emailPersona);
						
						
				// 		if ($emailSan === false) {
				// 			echo 0;
				// 		} else {
				// 			echo 1;
				// 		}
				// 	} else{ echo "Este mail:".$emailSan."es invalido";}
					
					
				// /*CARGO*/
				// 	$cargoSan = filter_var($cargoPersona, FILTER_SANITIZE_STRING);
				// 	$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/")); 
				// 	if (isset($cargoPersona) && !empty($cargoPersona) && filter_var($cargoSan, FILTER_VALIDATE_REGEXP,$nameRegex)){
				// 		$cargoPersona= mysqli_real_escape_string($conexion,$cargoPersona);
							
				// 		// $cargoSan = strtolower($cargoSan);
						
						
				// 		if ($cargoSan === false) {
				// 			echo 0;
				// 		} else {
				// 			echo 1;
				// 		}
				// 	} else {
				// 		echo "anda mal";
				// 	}
					
				// /*TELEFONO*/
				// 	$telSan = filter_var($telPersona, FILTER_SANITIZE_NUMBER_INT);
				// 	$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s]+$/")); 
				// 	if (isset($telPersona) && !empty($telPersona) && filter_var($telSan, FILTER_VALIDATE_REGEXP,$nameRegex)){
				// 		$telPersona= mysqli_real_escape_string($conexion,$telPersona);
						
				// 		if ($telSan === false) {
				// 			echo 0;
				// 		} else {
				// 			echo 1;
				// 		}
				// 	}else{
				// 		echo "Telefono con caracteres invalidos";
				// 	}
					
				// 	$usuarioSan = filter_var($nombreUsuario, FILTER_SANITIZE_STRING);
				// 	$nameRegex = array('options' => array('regexp' => "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9\s]+$/"));
				// 	///////DATOS LOGIN//////
				// 	if (isset($nombreUsuario) && !empty($nombreUsuario) && filter_var($usuarioSan, FILTER_VALIDATE_REGEXP,$nameRegex)){
						
						
						
				// 		if ($usuarioSan === false) {
				// 			echo 0;
				// 		} else {
				// 			echo 1;
				// 		}
				// 	}else{
				// 		echo "Usuario:".$usuarioSan."con caracteres invalidos";
				// 	}
					
					
				// 	$passSan = filter_var($passUsuario, FILTER_SANITIZE_STRING);
				// 	$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s]+$/"));
				// 	if (isset($passUsuario) && !empty($passUsuario) && filter_var($passSan, FILTER_VALIDATE_REGEXP,$nameRegex)){
						
						
				// 		if ($passSan === false) {
				// 			echo 0;
				// 		} else {
				// 			echo 1;
				// 		}
				// 	}else{
				// 		echo "Password con caracteres invalidos";
				// 	}
					
				// 	$repassSan = filter_var($repassUsuario, FILTER_SANITIZE_STRING);
				// 	$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s]+$/"));
				// 	if (isset($repassUsuario) && !empty($repassUsuario) && filter_var($repassSan, FILTER_VALIDATE_REGEXP,$nameRegex)){
							
						
						
				// 		if ($repassSan === false) {
				// 			echo 0;
				// 		} else {
				// 			echo 1;
				// 		}
				// 	} else{
				// 		echo "REPassword con caracteres invalidos";
				// 	}
					
					
					
					
				//////////////ESCAPANDO VARIABLES///////////
					
					$nombreEmpresa= mysqli_real_escape_string($conexion,$nombreEmpresa);
					$emailEmpresa= mysqli_real_escape_string($conexion,$emailEmpresa);
					$telEmpresa= mysqli_real_escape_string($conexion,$telEmpresa);
					$dirEmpresa= mysqli_real_escape_string($conexion,$dirEmpresa);
					$ciudadEmpresa= mysqli_real_escape_string($conexion,$ciudadEmpresa);
					$provEmpresa= mysqli_real_escape_string($conexion,$provEmpresa);
					$paisEmpresa= mysqli_real_escape_string($conexion,$paisEmpresa);
					$comentariosGral= mysqli_real_escape_string($conexion,$comentariosGral);
					$id_plan= mysqli_real_escape_string($conexion,$id_plan);
				

					//Consultas para hacer verificaciones de existencia
						$select_usuario = "SELECT nombreUsuario FROM usuarios WHERE nombreUsuario = '$nombreUsuario'";
						$consulta_usuario = mysqli_query($conexion,$select_usuario);
						$comprobar_usuario = mysqli_num_rows($consulta_usuario);
						
						$select_email = "SELECT email FROM usuarios WHERE email = '$emailPersona'";
						$consulta_email = mysqli_query($conexion,$select_email);
						$comprobar_email = mysqli_num_rows($consulta_email);
						
						$select_emailEm = "SELECT email_em FROM administradores WHERE email_em = '$emailEmpresa'";
						$consulta_emailEm = mysqli_query($conexion,$select_emailEm);
						$comprobar_emailEm = mysqli_num_rows($consulta_emailEm);
					
					//////////////VERIFICACIONES////////////
					
					if ($comprobar_usuario > 0) {
						echo "El nombre de usuario ya esta en uso, por favor ingrese otro nombre";
					}else {
						if($comprobar_email > 0){
							echo "El email personal ya esta en uso, por favor ingrese otro";	
						} else {
							if($comprobar_emailEm > 0){
								echo "El email de la empresa ya esta en uso, por favor ingrese otro";	
							} else {
								
					
					
									//////////////SANIAMIENTO Y VALIDACION////////////////
								
										$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/"));
										if (isset($nombrePersona) && !empty($nombrePersona) && filter_var($nombrePersona, FILTER_VALIDATE_REGEXP,$nameRegex)){
											$nombrePersona= strip_tags(mysqli_real_escape_string($conexion,$nombrePersona));
											$nombreSan = filter_var($nombrePersona, FILTER_SANITIZE_STRING);
										
											
											$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/"));
											if (isset($apellidoPersona) && !empty($apellidoPersona) && filter_var($apellidoPersona, FILTER_VALIDATE_REGEXP,$nameRegex)){
												$apellidoPersona= strip_tags(mysqli_real_escape_string($conexion,$apellidoPersona));
												$apellidoSan = filter_var($apellidoPersona, FILTER_SANITIZE_STRING);
												
												
												if (isset($emailPersona) && !empty($emailPersona)){
													$emailPersona= strip_tags(mysqli_real_escape_string($conexion,$emailPersona));
													$emailSan = filter_var($emailPersona, FILTER_SANITIZE_EMAIL);
													
													/////////DATOS LOGIN//////
													
													$nameRegex = array('options' => array('regexp' => "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ 0-9\s]+$/"));
													if (isset($nombreUsuario) && !empty($nombreUsuario) && filter_var($nombreUsuario, FILTER_VALIDATE_REGEXP,$nameRegex)){
														$nombreUsuario= strip_tags(mysqli_real_escape_string($conexion,$nombreUsuario));
														$usuarioSan = filter_var($nombreUsuario, FILTER_SANITIZE_STRING);
														
														
														$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s]+$/"));
														if (isset($passUsuario) && !empty($passUsuario) && filter_var($passUsuario, FILTER_VALIDATE_REGEXP,$nameRegex)){
															$passUsuario= strip_tags(mysqli_real_escape_string($conexion,$passUsuario));
															$passSan = filter_var($passUsuario, FILTER_SANITIZE_STRING);
															
															$nameRegex = array('options' => array('regexp' => "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s]+$/"));
															if (isset($repassUsuario) && !empty($repassUsuario) && filter_var($repassUsuario, FILTER_VALIDATE_REGEXP,$nameRegex)){
																$repassUsuario= strip_tags(mysqli_real_escape_string($conexion,$repassUsuario));
																$repassSan = filter_var($repassUsuario, FILTER_SANITIZE_STRING);
															
																if ($passUsuario != $repassUsuario) {
																	echo "Las contraseñas no coinciden";
																}else {
									/////////////////INSERTAR EN BASE DE DATOS USUARIOS///////////
									
									
									// $comiT = '$ems$/';
									// $passUsuario = sha1(md5($comiT.$passUsuario));
									
																		$insertarUser= "INSERT INTO usuarios (idTipoUsuario, nombre, apellido, email, nombreUsuario, password, telefono, fechaRegistro) 
																		VALUES ('2','$nombrePersona','$apellidoPersona','$emailPersona','$nombreUsuario','$passUsuario','$telPersona', NOW())";
												
																		$cUser=mysqli_query($conexion, $insertarUser);
																		if (!$cUser){
																			mysqli_query($conexion);
																		}
																		 
												
																		$insertarEmp= "INSERT INTO administradores (idUsuario,idRubro ,plan, nombre_em, email_em, tel_em, dir_em, ciudad_em, provincia_em, pais_em, coment_gral)
																		VALUES (LAST_INSERT_ID(),'$id_rubro','$id_plan','$nombreEmpresa','$emailEmpresa','$telEmpresa','$dirEmpresa','$ciudadEmpresa','$provEmpresa','$paisEmpresa','$comentariosGral')";
												
																		$cAdmin=mysqli_query($conexion, $insertarEmp);
																		if (!$cAdmin){
																			mysqli_query($conexion);
																		}
																		
																		if ($cAdmin == true && $cUser == true){
																		    echo 1;
																		} else {
																			echo 0;
																		} 
																		
																		// die();
																		mysqli_close($conexion);
																			
																				// if($cUser && $cAdmin){
																			// 	printf("$nombrePersona, $apellidoPersona Su registro fue realizado con exito <br> Su cuenta sera activada en el transcurso de las siguientes 48hs. Gracias");
																	}
									
																}	
								
															}
		
														}
												
													}				
												
												}				
											}
										}
									}
								}
				
				
				
					
				
				
				
				
				
				
			
				
				
				
				
?>
