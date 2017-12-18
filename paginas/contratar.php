<?php
	 /////////////PLANES PAGO////////////
 
	//ini_set('error-reporting',0);
 
	$id_plan = $_REQUEST['id_plan'];
	if ($id_plan == '1' || $id_plan == '2' || $id_plan == '3'){
		$sqlPlanes = "SELECT * FROM planes WHERE idPlan=$id_plan";
		$rsPlanes = mysqli_query($conexion, $sqlPlanes);
		if ($rsPlanes) { 
			$planes = mysqli_fetch_array($rsPlanes);
		} else {
			printf("Error: %s\n", mysqli_error($conexion));
			
		} 
	}


    $sqlRubros = "SELECT idRubro, nombreRubro FROM admins_rubros"; 
    $rsRubros = mysqli_query($conexion, $sqlRubros);

?>
 		 

<body>
	<script type="text/javascript" src="../js/contratar.js"></script>
	<main class="container">
		<section class="login_contract">
	 		<div class="container_login"> 
 		 	<form method="POST" class="login_form" id="contratar">
 		 	
 		 		<div class="row">
 		 			<div class="col offset-m2 m8 offset-l2 l8">
 		 				<div class="card-panel teal lighten-2 center-align">
 							 <blockquote><?= "Plan " . $planes["nombre"] . ", " . $planes["usuarios_max"] . " usuarios, " . $planes["ordenes_max"] . " ordenes."?></blockquote>
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="container col s12 m12 offset-l1 l3 z-depth-2" id="hijoUno"> <br> <br>
 						<div class="switch col offset-s4 s2 offset-m2 m8 l12 center-align">
   							<label> 
  								<input type="checkbox" id="padreUno">
  									<span class="lever"></span>
							</label>	
  						</div>
 		 				<div class="section">
 	 			 			<input type="hidden" name="id_plan" value="<?= $id_plan;?>" id="id_plan"/>
 	 			 				<div class="container"> <br> <br> <br>
 	 			 				<div class="col s12 m12 l12 center-align">
  			 						<input type="radio" name="pagando" value="1" id="radioUno">
  			 						<b class="total"><?= $planes["pago_anual"]*12?></b><br><br>
  			 						<span class="verde">Ahorra <b class="textDesc">28%</b></span><br>
  			 						<br>Anual<br><br>
  			 						<span class="espacio">Cubre la suscripcion por 12 meses <span class="resaltar">con posibilidad de renovar manual/automaticamente desde el sistema.</span><br><br>
	 			 				</div>
	 			 				</div>
		 				</div>
		 	 		</div>
			 	 	<div class="container col s12 m12 offset-l1 l3 z-depth-2" id="hijoDos"> <br> <br>
			 	 		<div class="switch col offset-s4 s2 offset-m2 m8 l12 center-align">
   							 <label> 
   							 	<input type="checkbox" id="padreDos">
  								<span class="lever"></span>
						  	</label>
	  					</div>
					 	<div class="section">
							<input type="hidden" name="id_plan" value="<?= $id_plan;?>" id="id_plan"/>
		 					<div class="container"><br><br><br>
	 		 			 		<div class="col s12 m12 l12 center-align">
	 				 				<input type="radio" name="pagando" value="2" id="radioDos">
	 				 				<b class="total"><?= $planes["pago_semestral"]*6?></b><br><br>
	 				 				<span class="verde">Ahorra <b class="textDesc">16%</b></span><br>
	 				 				<br>Semestral<br><br>
	 				 			  	<span class="espacio">Cubre la suscripcion por 6 meses, esto significa <span class="resaltar">un unico pago de</span>, con posibilidad de renovar manual/automaticamente desde el sistema.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="container col s12 m12 offset-l1 l3 z-depth-2" id="hijoTres"><br><br>
						<div class="switch col offset-s4 s2 offset-m2 m8 l12 center-align">
	   						<label>
	  							<input type="checkbox" id="padreTres">
	  							<span class="lever"></span>
							</label>
	  					</div>
	  					<div class="section" >
							<input type="hidden" name="id_plan" value="<?= $id_plan;?>" id="id_plan"/>
	 					 	<div class="container"> <br> <br> <br>
		 		 			   	<div class="col s12 offset-m2 m8 l12 center-align">
	 					 			<input type="radio" name="pagando" value="3" id="radioTres">
	 					 			<b class="total"><?= $planes["pago_mensual"]?></b><br><br>
	 					 			<b class="rojo">Sin descuentos</b><br><br>
	 					 			<span class="textPlan">Mensual</span><br><br>
	 					 			<span class="espacio">Renobables automaticamente desde el sistema.</span></span><br><br><br><br><br>
						 	  	</div>
					 		 </div> 
						</div>
					</div>
				</div>
			<br><br>
				<div class="datos_personales">
					<h3 class="indigo-text text-lighten-1">Datos personales</h3>
						<div class="row">
							<div class="input-field col l6">
								<label for="">Nombre completo</label>
								<input type="text" id="nombre_p" name="nombre_p" value="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Primer y segundo nombre"  title="El nombre solo puede contener letras, no numeros" data-length="30" required>
								<div id="info_name"></div>
							</div>
							<div class="input-field col l6">
								<label for="">Apellido</label>
								<input type="text" name="apellido_p" id="apellido_p" value="<?= $_REQUEST['apellido_p'];?>"  title="El apellido solo puede contener letras, no numeros" data-length="25">
								<div id="info_surname"></div>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l4">
								<input type="email" name="email_p" id="email_p" value="<?= $_REQUEST['email_p'];?>" class="validate" required>
								<label for="email" data-error="Por favor escriba un email valido" data-success="El email ingresado es valido">Email</label>
								<div id="info_emailp"></div>
							</diV>
							<div class="input-field col l4">
								<label for="">Cargo dentro de la empresa</label>
								<input type="text" name="cargo_p" id="cargo_p" value="<?= $_REQUEST['cargo_p'];?>" required>
							</div>
							<div class="input-field col l4">
								<label for="">Tel/cel</label>
								<input type="number" name="tel_p" id="tel_p" value="<?= $_REQUEST['tel_p'];?>" placeholder=""  class="validate">
							</div>
							</div>
						</div>
				</div>
				<br> <br>
				<div class="datos_empresa">
					<h3 class="indigo-text text-lighten-1">Datos empresa</h3>
						<div class="row">
							<div class="input-field col l3">
								<label for="">Nombre</label>
								<input type="text" name="nombre_em" id="nombre_em" value="<?= $_REQUEST['nombre_em'];?>"  data-length="30" required>
								<div id="info_nameEm"></div>
							</div>
							<div class="input-field col l3">
								 <select id="rubro" name="rubro">
	                                <option value="" selected>Elija una opción</option>
	                                <?php while ($rubros = mysqli_fetch_array($rsRubros)) : ?>
                              		<option value="<?= $r2["idRubro"];?>"><?= $r2["nombreRubro"]; ?> </option>
	                                <?php endwhile; ?>
                            	</select>
                            <label for="rubro">Rubro de trabajo</label>
							</div>
							<div class="input-field col l3">
								<input type="email" name="email_em" id="email_em" value="<?= $_REQUEST['email_em'];?>"  class="validate" required>
								<label for="email_em" data-error="Por favor escriba un email valido" data-success="El email ingresado es valido">Email</label>
							</div>
							<div class="input-field col l3">
								<label for="">Telefono</label>
								<input type="number" name="tel_em" id="tel_em" value="<?= $_REQUEST['tel_em'];?>" placeholder=""  required>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l3">
								<label for="">Direccion</label>
								<input type="text" name="direccion_em" id="direccion_em" value="<?= $_REQUEST['direccion_em'];?>"  required>
							</div>
							<div class="input-field col l3">
								<label for="">Ciudad</label>
								<input type="text" name="ciudad_em" id="ciudad_em" value="<?= $_REQUEST['ciudad_em'];?>"  required>
							</div>
							<div class="input-field col l3">
								<label for="">Provincia</label>
								<input type="text" name="provincia_em" id="provincia_em" value="<?= $_REQUEST['provincia_em'];?>"  required>
							</div>
							<div class="input-field col l3">
								<label for="pais_em">Pais</label>
								<input type="text" name="pais_em" id="pais_em" value="<?= $_REQUEST['pais_em'];?>"  required>
							</div>
						</div>
						<br>
						<textarea id="comentario_gral" name="comentario_gral" value="<?= $_REQUEST['comentario_gral'];?>" class="materialize-textarea"  data-length="300"></textarea>
						<label for="comentario_gral">Comentarios adicionales</label>
  					</div>
  					<div class="datos_login">
						<h3 class="indigo-text text-lighten-1">Datos Login</h3>
							<div class="row">
								<div class="input-field col l6"><!--http://www.forosdelweb.com/f18/expresion-regular-acepte-numeros-letras-solo-numeros-pero-no-solo-letras-1044069/    https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Regular_Expressions-->
									<label for="user">Nombre de usuario</label>
									<input type="text" class="validate" id="user" name="user" value="<?= $_REQUEST['user'];?>"  data-length="20" required>
									<div id="info_user"></div>
								</div>
							</div>
							<div class="row">
								<div class="input-field col l6">
									<label for="pass">Contraseña</label>
									<input type="password" id="password" name="pass" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Se recomienda que la contraseña contenga al menos una letra mayúscula, minúscula y un número"  required>
									<div id="info_pass"></div>
								</div>
								<div class="input-field col l6">
									<label for="pass2">Por favor repita su Contraseña</label>
									<input type="password" id="repassword" name="pass2" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Debe coincidir con la anterior"  required>
									<div id="info_pass2"></div>
								</div>
								<div class="row">
								<div id="alerta" class="col l6"></div>
								</div>
					<input type="submit" name="ENVIAR" value="submit"  class="btn" id="registrado"/>
			   </form>
				<br><br><br>
			</div>
			<div class="row">
					<div class="col offset-l6 l5" id="exito" style="display:none">Sus datos han sido recibidos con éxito.</div>
					<div class="col offset-l6 l5" id="fracaso" style="display:none">Se ha producido un error durante el envío de datos.</div>
				</div>
			
			<script type="text/javascript">
			 $(document).ready(function(){
			 	$('select').material_select(); 
			 });
			</script>
	 	</section>
	</main>

	
	
	