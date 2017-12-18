
<?php
require('conexion.php');
session_start();
///////////MARCAS/////////////

$search_marca = $_REQUEST['marca'];
//Busca las marcas de productos que pertenezcan al mismo rubro 
$select_marca = "SELECT DISTINCT productos.marca FROM productos
                                                 WHERE idRubro = '".$_SESSION["idRubro"]."'
                                                 AND marca like '%".$search_marca."%'  ORDER BY marca DESC";
$consulta = mysqli_query($conexion, $select_marca) or die(mysqli_error($conexion));
while ($lista_marca = mysqli_fetch_array($consulta)) : ?>
    <div class="suggest-element"><a data="'.$lista_marca['marca'].'" class="marca"><?= utf8_encode($lista_marca['marca']) ?></a></div>
<?php endwhile; ?>