	<?php
	session_start();
	if(isset($_SESSION['user'])) {
		
		header("Location: ?p=vista-admin");
	}
	?>
	<script type="text/javascript" src="js/login.js"></script>
	<main>
			<section>
				<div class="row">
    				<form id="formlog" method="POST" class="col s12 m12 l12">
    					<div class="container">
     					 <div class="row">
        				 	<div class="input-field col s12 offset-m3 m6 offset-l4 l3">
          						<input id="user" name="user" type="text" class="validate" pattern="[A-Za-z\d]{1,30}">
          						<label for="user">Usuario</label>
        					</div>
        					<div class="input-field col s12 offset-m3 m6 offset-l4 l3">
          						<input id="password" name="password" type="password" class="validate" pattern="[A-Za-z\d]{1,30}">
         					    <label for="password">Password</label>
       						</div>
       						<span class="col offset-s3 s8 offset-m5 m7 offset-l4 l3" id="result"></span>
      					</div>
      					<div class="row">
        					<div class="col offset-s3 s8 offset-m5 m7 offset-l5 l7">
          						<input id="submit" type="submit" name="submit" class="btn" value="Iniciar sesión">
         					</div>
         					
      					</div>
      					</div>
    				</form>
    				
    			</div>
			</section>
			
		<?php /*
			session_start();
			if (isset($_REQUEST["submit"])){
			    //echo "user: " . $_REQUEST["user"] . "  pass: " . $_REQUEST["password"];
			    //Consula para saber si existe usuario con nombre usuario y password ingresados
				$cs = "SELECT nombre, apellido, idUsuario, idTipoUsuario FROM usuarios WHERE nombreUsuario='".$_REQUEST["user"]."' AND password='".$_REQUEST["password"] ."' ";
				$rs = mysqli_query($conexion, $cs);
				if (!$rs){
					mysqli_error($conexion);
					echo "<script type='text/javascript'> console.log('NO SE EJECUTA VARIABLE RS'); </script>";
				}else {
					if (mysqli_num_rows($rs)==1) {  //pregunta si hay uno y solo un resultado con la consulta anterior
						
						$datos = mysqli_fetch_assoc($rs);
						//Variables de sesion
						$_SESSION["idUsuario"] = $datos["idUsuario"];
						$_SESSION["idTipoUsuario"] = $datos["idTipoUsuario"];
						$_SESSION["nombre"] = $datos["nombre"];
						$_SESSION["apellido"] = $datos["apellido"];
						echo "<script type='text/javascript'> alert('LOGUEO CON EXITO'); </script>";
						//Si usuario es tipo admin que vaya a vista-admin.php, si es tipo cliente que vaya a vista-cliente.php
						if ($_SESSION["idTipoUsuario"]==2){
							echo "<script type='text/javascript'> location.href='?p=empresa'; </script>";
						} else if ($_SESSION["idTipoUsuario"]==3){
							echo "<script type='text/javascript'> location.href='?p=vista-cliente'; </script>";
						}
					} else { //Error al escribir nombre de usuario y pass o trajo mas de un usuario
						echo "<script type='text/javascript'> console.log('NUM ROW ES DISTINTO DE 1'); </script>";
						echo "<script type='text/javascript'> alert('User Name Or Password Invalid!'); </script>";
					}
				}
			}
			*/
			?>	
			
	</main>
	<br><br><br><br>
