<?php
require('conexion.php');
session_start();
///////////MARCAS/////////////

$search_productos = $_REQUEST['producto'];
//Busca los nombres de productos que pertenezcan al mismo rubro 

$select_productos = "SELECT DISTINCT productos.tipo FROM productos
                                                            WHERE idRubro = '".$_SESSION["idRubro"]."'
                                                            AND tipo like '%".$search_productos."%'  ORDER BY tipo DESC";

$consulta = mysqli_query($conexion, $select_productos) or die(mysqli_error($conexion));
while ($lista_productos = mysqli_fetch_array($consulta)) : ?>
    <div class="suggest-element"><a data="'.$lista_productos['tipo'].'" class="tipo"><?= utf8_encode($lista_productos['tipo']) ?></a></div>
<?php endwhile; ?>