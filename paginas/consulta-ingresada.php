<?php
include("conexion.php");
session_start();
$idCliente = $_REQUEST["idCliente"];
$asunto = $_REQUEST["asunto"];
$idAdmin = $_REQUEST["empresa"];
$consulta_c = $_REQUEST["consulta_c"];
if ()
$cs = "INSERT INTO consultas_clientes (idAdmin, idCliente, asunto, consulta_text) 
        VALUES ('$idAdmin', '$idCliente', '$asunto', '$consulta_c') ";
        
$q_consul = mysqli_query($conexion, $cs) or die($conexion);
if ($q_consul){
    echo 1;
} else {
    echo 0;
    mysqli_error($conexion);
}


?>