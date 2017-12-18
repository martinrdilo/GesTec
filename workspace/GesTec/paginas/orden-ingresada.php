<?php

require("conexion.php");
session_start();

$marca = trim($_REQUEST['marca']);
$producto = trim($_REQUEST['producto']);
$modelo = trim($_REQUEST['modelo']);
$idTipo = trim($_REQUEST['idTipo']);
$idCliente = trim($_REQUEST['idCliente']);
$idEstado = trim($_REQUEST['idEstado']);
$descripcion = trim($_REQUEST['descripcion']);
$diagnostico = trim($_REQUEST['diagnostico']);
$solucion = trim($_REQUEST['solucion']);
$precio = trim($_REQUEST['precio']);

$idRubro = $_SESSION["idRubro"];
$idAdmin = $_SESSION["idUsuario"];


//Pregunto si hay algun producto con ese mismo modelo, tipo y marca
$cs_producto = "SELECT idProducto FROM productos WHERE idRubro = '$idRubro'
                                                     AND marca = '$marca'
                                                     AND tipo = '$producto'
                                                     AND modelo = '$modelo' ";
                                                     
$q_producto = mysqli_query($conexion, $cs_producto) or die(mysqli_error($conexion));

//Si no existe el producto, entonces lo agrego en la tabla productos y obtengo el id para escribirlo en la tabla ordenes
if ($num_filas = mysqli_num_rows($q_producto)==0){
    $insert_producto = "INSERT INTO productos (idRubro, tipo, marca, modelo)
                                VALUES ('$idRubro', '$producto', '$marca', '$modelo')";
    $res_insert = mysqli_query($conexion, $insert_producto) or die(mysqli_error($conexion));
    //selecciono el idProducto que acabo de agregar
    if ($res_insert){
        $select_id = "SELECT idProducto FROM productos WHERE idProducto = LAST_INSERT_ID()";
        $q_id = mysqli_query($conexion, $select_id) or die(mysqli_error($conexion));
        //Tomo el id del producto ingresado recientemente
        if ( $id = mysqli_fetch_array($q_id)){
            $idProducto = $id["idProducto"];
        }
    }
//Si el producto ya existe, solo tomo el id del producto para agregarlo a tabla ordenes
} else {
    $id = mysqli_fetch_array($q_producto);
    $idProducto = $id["idProducto"];
}



$insertarP = "INSERT INTO ordenes (idAdmin, idCliente, idEstado, idTipo, idProducto, descripcion, diagnostico, solucion, precio, fechaIngreso, fechaUltimaMod) 
                VALUES ('$idAdmin','$idCliente','$idEstado','$idTipo','$idProducto', '$descripcion', '$diagnostico', '$solucion','$precio', NOW(), NOW() )";

$ingresadoP = mysqli_query($conexion, $insertarP);

if (!$ingresadoP){
	printf("Error: %s\n", mysqli_error($conexion));
}
if ($_REQUEST["from"] == 'va' ){
    header("Location: ?p=vista-admin");
} else if ($_REQUEST["from"] == 'lc' )  {
    header("Location: ?p=lista-clientes");
}





?>