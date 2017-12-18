	<main>
		<section class="container">
	 		<div class="section" id="wrapper-plan">
	 			<?php
	 			///////////////////DATOS PRESUPUESTO///////////////// 
					$tipoPre=$_REQUEST['tipoPre'];
					$estado=$_REQUEST['estado'];
					$descripcion=$_REQUEST['descripcion'];
					$diagnostico=$_REQUEST['diagnostico'];
					$solucion=$_REQUEST['solucion'];
					$precio=$_REQUEST['precio'];
					 
				//////////////////DATOS DE ADMIN Y CLIENTE//////////////////////////
                    $idAdmin=$_REQUEST['idAdmin'];
					$idCliente=$_REQUEST['idCliente'];
					
				/////////////////INSERTAR EN BASE DE DATOS PRESUPUESTOS///////////
				
				$insertarPre= "INSERT INTO presupuestos (idAdmin, idCliente, tipoPre, estado, descripcion, diagnostico, solucion, precio) 
				VALUES ('$idAdmin','$idCliente','$tipoPre','$estado','$descripcion','$diagnostico','$solucion','$precio')";
				$cPre=mysqli_query($conexion, $insertarPre);
				if (!$cPre){
				    printf("Error: %s\n", mysqli_error($conexion));
				}
				$sel_id = mysqli_query($conexion, "SELECT idPresupuesto FROM presupuestos WHERE idPresupuesto=LAST_INSERT_ID();");
                if (!$sel_id){
                    printf("Error: %s\n", mysqli_error($conexion));
                }
				if($cPre && $sel_id) {
				    printf("El presupuesto con número " . $sel_id["idPresupuesto"] . " se ha registrado con éxito. <br> Gracias");
				}
				
				?>
	 			
	 		</div>
	 	</section>
	</main>
