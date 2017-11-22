<?php

//capturar la pagina que queremos abrir
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

require("paginas/conexion.php"); 

if ($pagina == 'login') {
    require_once('paginas/header/headermin.php');
 }else if ($pagina == 'vista-cliente' or $pagina == 'consulta' ){
    require_once('paginas/header/headercliente.php');
} else if ($pagina == 'vista-admin' or $pagina == 'nueva-orden' or $pagina == 'nuevo-cliente' or $pagina == 'vista-cliente' or $pagina == 'enviar-wapp' or $pagina == 'lista-clientes' or $pagina == 'lista-ordenes-cliente' or $pagina == 'consulta-admin') {
    require_once('paginas/header/headeradmin.php');
} else {
    require_once('paginas/header/header.php');
}


require('paginas/' . $pagina . '.php');


if ($pagina == 'login' or $pagina == 'consulta' or $pagina == 'consulta-admin') {
    //require_once('paginas/footer/footermin.php');
} else if ($pagina == 'vista-admin' or $pagina == 'vista-cliente' or $pagina == 'nueva-orden' or $pagina == 'nuevo-cliente' or $pagina == 'enviar-wapp' or $pagina == 'lista-clientes' or $pagina == 'lista-ordenes-cliente'){
    require_once('paginas/footer/footercliente.php');
} else {
    require_once('paginas/footer/footer.php');
}

?>


