<?php
session_start();
require("conexion.php");


$deleteOrdenes = "DELETE FROM ordenes WHERE (idCliente = '".$_REQUEST["idUsuario"]."' 
                                      AND idAdmin = '".$_SESSION["idUsuario"]."')";
if (mysqli_query($conexion, $deleteOrdenes)){
    echo "usuario borrado con éxito";
} else{
    mysqli_error($conexion);
};

$deleteCliente = "DELETE FROM clientes WHERE idUsuario = '".$_REQUEST["idUsuario"]."'";
if (mysqli_query($conexion, $deleteCliente)){
    echo "usuario borrado con éxito";
} else{
    mysqli_error($conexion);
};

$deleteClienteAdm = "DELETE FROM admins_clientes WHERE idAdmin = '".$_SESSION["idUsuario"]."'
                                            AND idCliente =  '".$_REQUEST["idUsuario"]."'";
if (mysqli_query($conexion, $deleteClienteAdm)){
    echo "usuario borrado con éxito";
} else{
    mysqli_error($conexion);
};

$deleteUser = "DELETE FROM usuarios WHERE idUsuario =  '".$_REQUEST["idUsuario"]."'";   
if (mysqli_query($conexion, $deleteUser)){
    echo "usuario borrado con éxito";
} else{
    mysqli_error($conexion);
};

header('Location: ?p=lista-clientes');

?>