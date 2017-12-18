<?php
//header( 'Content-type: text/html; charset=iso-8859-1' );
require('conexion.php');
session_start();

/////////////CLIENTES/////////////

$search_user = $_REQUEST['cliente'];
                //Busca los clientes pertenecientes al administrador logueado
$select_user = "SELECT usuarios.idUsuario, usuarios.nombre, usuarios.apellido FROM usuarios 
                JOIN admins_clientes ON admins_clientes.idCliente = usuarios.idUsuario
                WHERE admins_clientes.idAdmin = '".$_SESSION["idUsuario"]."' ORDER BY nombre DESC  ";

$consulta = mysqli_query($conexion, $select_user) or die(mysqli_error($conexion));
while ($lista_user = mysqli_fetch_array($consulta)) {
    echo '<div class="suggest-element"><a data="'.$lista_user['apellido'] . ', ' . $lista_user['nombre'].'" id="cliente'.$lista_user['idUsuarios'].'">'.utf8_encode($lista_user['apellido']).'&nbsp'.utf8_encode($lista_user['nombre']).'</a></div>';
}
?>