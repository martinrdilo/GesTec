<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'tinchomdq');
define('DB_PASS','');
define('DB_NAME', 'c9');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!db){
    echo "error al conectarse: <br>";
    echo mysqli_connect_errno() . "<BR>";
    echo mysqli_connect_error();
    exit;
} else {echo "OK";}

/*$consulta = "INSERT INTO ciudades (ciudad) VALUES ('Pinamar');";

$resultado = mysqli_query($db, $consulta);

if ($resultado){
    echo "OK";
}*/

$consulta = "SELECT * FROM personas WHERE id=2;";

$rs = mysqli_query($db, $consulta);

if ($rs){
    while ($r = mysqli_fetch_array($rs)){
        $nombre = $r['nombre'];
        $apellido = $r['apellido'];
        $telefono = $r['telefono'];
        $id = $r['id'];
    }
}

?>

<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form method="GET">
		<input type="text" name="nombre" value = "<?=$nombre;?>"/>
		<input type="text" name="apellido" value= "<?=$apellido;?>" />
		<input type="text" name="tel" value="<?=$telefono;?>">
		<input type="hidden" name="id" value="<?=$id;?>"/>
		<input type="submit" name="enviar">
	</form>
</body>
</html>

<?php

if($_REQUEST['nombre'] !=''){
    $cs = "UPDATE personas SET nombre='".$_REQUEST["nombre"]."', 
                                apellido='".$_REQUEST["apellido"]."',
                                telefono='".$_REQUEST["telefono"]."' 
                                WHERE id='2' ;";
    mysqli_query ($db, $cs);
}

?>







