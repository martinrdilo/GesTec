<?php

include ('conexion.php') ;


$consulta = "Select * FROM presupuestos";

$rs = mysqli_query($db, $consulta);

$tipo= $_GET['tipo'];
$descripcion = $_REQUEST['descripcion'];
$estado = 'nuevo';
if($_REQUEST['tipo'] != ''){
    $cs = "INSERT INTO presupuestos (tipoPresupuesto, descripcion, estado) VALUES ('$tipo','$descripcion', '$estado')";
    $ejecutar = mysqli_query($db, $cs);
    if (!$ejecutar){
        echo "ALGO SALIO MAL" . "<br>";
        die ('consulta no valida: ' . mysqli_error($db)); 
    }
}

?>