<?php
	include("conexion.php");
	
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
		if (mysqli_query($conexion, $cs)){ ?>
			<p class="echo" data-id="<?= "Orden modificada con éxito: modificar-orden.php" ?>"> </p>  
		<?php }else{ ?>
		    <p class="echo" data-id="<?= mysqli_error(); ?>"> </p>
		<?php
		}
	}
	
?>

	<script type="text/javascript">
	    $(document).ready(function(){
	    	var result = $('.echo').attr("data-id");
	    	console.log(result);
	    	});
	</script>