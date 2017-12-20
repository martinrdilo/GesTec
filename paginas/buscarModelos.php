<?php
require('conexion.php');
session_start();
///////////MARCAS/////////////

$search_modelo = $_REQUEST['modelo'];
//Busca las marcas de productos que pertenezcan al mismo rubro 
$select_modelo =  "SELECT DISTINCT productos.modelo FROM productos
                                                    WHERE idRubro = '".$_SESSION["idRubro"]."'
                                                    AND marca like '%".$search_modelo."%'  ORDER BY marca DESC";
$consulta = mysqli_query($conexion, $select_modelo) or die(mysqli_error($conexion));
while ($lista_modelo = mysqli_fetch_array($consulta)) : ?>
    <div class="suggest-element"><a data=<?= $lista_modelo['modelo']; ?> class="modelo"><?php echo $lista_modelo['modelo']; ?> </a></div>
<?php endwhile; ?>