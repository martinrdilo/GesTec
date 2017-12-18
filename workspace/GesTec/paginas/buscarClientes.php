<?php
require('conexion.php');
session_start();
///////////CLIENTES/////////////

$search_cliente = $_REQUEST['cliente'];
//Busca lasos clientes pertenezcan al mismo administrador
$select_cliente = "SELECT U.nombre, U.apellido,U.idUsuario FROM usuarios U 
                                                        JOIN admins_clientes AC ON AC.idAdmin = '".$_SESSION["idUsuario"]."' 
                                                        AND AC.idCliente = U.idUsuario
                                                        WHERE U.nombre like '%".$search_cliente."%'  
                                                        OR U.apellido like '%".$search_cliente."%' ORDER BY U.apellido DESC";
$consulta = mysqli_query($conexion, $select_cliente) or die(mysqli_error($conexion));
while ($lista_cliente = mysqli_fetch_array($consulta)) {
    echo '<div class="suggest-element"><a data="'.$lista_cliente['apellido'].', '.$lista_cliente['nombre'].'" class="cliente">'.utf8_encode($lista_cliente['apellido']).', '.utf8_encode($lista_cliente['nombre']).'</a>
    <input type="hidden" name="idCliente" id="idCliente" value="'.$lista_cliente['idUsuario'].'"> </div>';
}

?>
