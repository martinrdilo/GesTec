<?php 
session_start();
require("conexion.php"); ?> 


<body>
    <div class="row">
    
<main class="col s12 m12 l12 grey lighten-4 z-depth-1">
        <div class="row section container">
            <div class="row hide">
                <section class="col offset-s2 s8 m12 l12">
                    <form role="search">
                        <div class="input-field">
                            <input id="icon_prefix" name="busquedaAdmin" type="search" class="validate" placeholder="Nombre o apellido" size="30" minlength="3" maxlength="20">
                            <label class="icon_prefix" for="search"></label>
                            <button class="btn">Buscar</button>
                        </div>
                    </form>
                </section>        
            </div>
            <section class="col s12 m12 l12">
               <div class="row section">
                   <section class="col s12 m12 l12"> 
                     <div class="row">
                       <ul class="collapsible col s12 m12 l11" data-collapsible="accordion">
                            <li><div class="collapsible-header active grey darken-1 white-text opcion"><span class="primero"><i class="material-icons right">arrow_drop_up</i></span><span class="primero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span>Clientes</span></div>
                            <div class="collapsible-body teal lighten-5">
                                <table class="responsive-table highlight display nowrap" id="table_uno">  
                                <!-- TABLA ORDENES EN CURSO -->
                                    <thead>
                                        <tr>
                                            <!--<th>id Cliente</th>-->
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <!--<th>Direccion</th>-->
                                            <th>Email</th>
                                            <th>Nombre de usuario</th>
                                            <th>Agregar orden</th>
                                            <th>Lista Ordenes</th>
                                            <th>Eliminar usuario</th>
                                        <!--    <th>Eliminar</th>  -->
                                        </tr>
                                    </thead>
    
                                    <tbody>
<?php   
//Selecciono los usuarios que sean clientes del admin logueado.
//Mientras el admin logueado tenga clientes en tabla admin_clientes, traeme todos mientras el idCliente sea un Usuario de tipo 3 y ademas coincida con idUsuario de tabla usuarios    
$select_cliente = "SELECT U.* FROM usuarios U JOIN admins_clientes AC 
                        ON '".$_SESSION["idUsuario"]."' = AC.idAdmin
                       WHERE AC.idCliente = U.idUsuario";   
                     
$query_cliente = mysqli_query($conexion, $select_cliente);  

if($query_cliente) {
    while ($row_cliente = mysqli_fetch_array($query_cliente)){
?>
                                        <tr> 
                                            <!--<td><?php// echo $row_cliente["idUsuario"] ?></td>-->
                                            <td><?php echo $row_cliente["nombre"] ?></td>
                                            <td><?php echo $row_cliente["apellido"] ?></td>
                                            <td><?php echo $row_cliente["email"] ?></td>
                                            <td><?php echo $row_cliente["nombreUsuario"]; ?></td>
                                            <div>
                                               <!-- COLUMNAS VER EDITAR TRAIDAS DESDE OTRO ARCHIVO .PHP-->
                                              <?php
                                                include("lista-clientes-editar.php");
                                                ?>
                                            </div>
                                            <!--        <td><a class="btn red hovered" href="#remove"><i class="large material-icons">delete</i></a>   -->
                                        </tr> 
<?php
    }
}
?>
                                    </tbody>
                                </table>
                            </div>
                            </li>
                        </ul>
                      </div>
                    </section>
                    <section class="hide col offset-s3 s7 m3 l2">
                        <div class="row">
                            <section class="col s12 m12 l12">
                                <form role="search">
                                    <div class="input-field">
                                        <input id="search" name="busquedaAdmin" type="search" class="search" placeholder="Nombre o apellido" size="30" minlength="3" maxlength="20">
                                        <label class="label-icon" for="search"></label>
                                        <button class="btn">Buscar</button>
                                    </div>
                                </form>
                            </section> 
                        </div>
                    </section>
        </div>
</main>

<script type="text/javascript">
    $(".opcion").click(function() {
        $(".primero > i").toggle();
         
    });
</script>