
<body>
<div class="row">
    <main class="col s12 m12 l12 grey lighten-5 z-depth-1">
        <div class="row section container">
            <div class="row hide">
                    <section class="col offset-s2 s8 m12 l12">
                        <form role="search">
                            <div class="input-field">
                                <input id="search" name="busquedaAdmin" type="search" class="label-icon" placeholder="Nombre, apellido o nº orden" size="30" minlength="3" maxlength="20">
                                <label class="label-icon" for="search"></label>
                                <button class="btn">Buscar</button>
                            </div>
                        </form>
                    </section>        
                </div>
           <section class="col s12 m12 l12">
               <div class="row section">
                   <section class="col s11 m11 l12"> 
                       <div class="row">
                       <ul class="collapsible col offset-s1 s11 m12 l11 teal lighten-5" data-collapsible="accordion">
                            <li>
                            <div class="collapsible-header active grey darken-1 white-text opcion"><span class="primero"><i class="material-icons right">arrow_drop_up</i></span><span class="primero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span><span class="truncate">Ordenes en curso</span></div>
                            <div class="collapsible-body teal lighten-5">
                                <table class="responsive-table striped highlight display nowrap" id="table_uno">  
                                <!-- TABLA ORDENES EN CURSO -->
                                    <thead>
                                        <tr>
                                            <th>Orden</th>
                                            <th>Ingreso</th>
                                            <th>Cliente</th>
                                            <th>Producto</th>
                                            <th>Tipo</th>
                                            <th>Detalles</th>
                                            <th>Editar</th>
                                        <!--    <th>Eliminar</th>  -->
                                        </tr>
                                    </thead>
    
                                    <tbody>
<?php
//Selecciona de la base de datos todas las ordenes de trabajo pertenecientes  a la empresa/taller logueado donde el estado de orden sea "EN CURSO"
$sql = "SELECT O.*, U.apellido, U.nombre, P.tipo, P.marca, P.modelo, OT.nombreTipoOrd, OE.nombreEstadoOrd
        FROM ordenes O JOIN usuarios U ON O.idCliente = U.idUsuario
                       JOIN ordenes_tipos OT ON O.idTipo = OT.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       JOIN productos P ON P.idProducto = O.idProducto
                       WHERE O.idAdmin = '".$_SESSION["idUsuario"]."' AND O.idEstado = '1'
                       ORDER BY O.fechaIngreso DESC";
                       
$rs = mysqli_query($conexion, $sql);
if($rs) {
    
    while ($r = mysqli_fetch_array($rs)){
?>
                            <tr>
                                <td><?php echo $r["idOrden"] ?></td>
                                <td><?php echo $r["fechaIngreso"] ?></td>
                                <td><?php echo $r["apellido"] . " " . $r["nombre"] ?></td>
                                <td><?php echo $r["tipo"] . " " . $r["marca"] . " " . $r["modelo"]; ?></td>
                                <td><?php echo $r["nombreTipoOrd"] ?></td>
                           <div id="columnas-ver-editar">
                               <!-- COLUMNAS VER EDITAR TRAIDAS DESDE OTRO ARCHIVO .PHP-->
                              <?php
                                include("vista-admin-buttons.php");
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
               </div>
               <div class="row section">
                   <section class="col s11 m11 l11">
                       <div class="row">
                       <ul class="collapsible col offset-s1 s11 m12 l12 teal lighten-5" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header active grey darken-1 white-text opcion2"><span class="segundo"><i class="material-icons right">arrow_drop_up</i></span><span class="segundo"><i class="material-icons right" style="display: none">arrow_drop_down</i></span class="truncate">Presupuestos en espera de aprobación</div>
                                <div class="collapsible-body teal lighten-5">
                                     <table class="responsive-table striped highlight display nowrap" id="table_dos">
                         <!-- TABLA ORDENES EN ESPERA DE APROBACION E INGRESADAS POR EL USUARIO -->
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Ingreso</th>
                                    <th>Cliente</th>
                                    <th>Producto</th>
                                    <th>Tipo</th>
                                    <th>Detalles</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>

                            <tbody>
<?php

//Selecciona todas las ordenes de trabajo pertenecientes  a la empresa/taller logueado donde el estado de orden sea "en espera aprobacion" o "ingresado por cliente"

$sql = "SELECT O.*, U.apellido, U.nombre, P.tipo, P.marca, P.modelo, OT.nombreTipoOrd, OE.nombreEstadoOrd
        FROM ordenes O JOIN usuarios U ON O.idCliente = U.idUsuario
                       JOIN ordenes_tipos OT ON O.idTipo = OT.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       JOIN productos P ON P.idProducto = O.idProducto
                       WHERE O.idAdmin = '".$_SESSION["idUsuario"]."' 
                       AND (O.idEstado = '5' OR O.idEstado = '7') 
                       ORDER BY O.fechaIngreso DESC";                 
                           
$rs = mysqli_query($conexion, $sql); 
if($rs) {
    while ($r = mysqli_fetch_array($rs)){

?>
                            <tr> 
                                <td><?php echo $r["idOrden"] ?></td>
                                <td><?php echo $r["fechaIngreso"] ?></td>
                                <td><?php echo $r["apellido"] . " " . $r["nombre"] ?></td>
                                <td><?php echo $r["tipo"] . " " . $r["marca"] . " " . $r["modelo"]; ?></td>
                                <td><?php echo $r["nombreTipoOrd"] ?></td>
                                <div id="columnas-ver-editar">
                               <!-- COLUMNAS VER EDITAR TRAIDAS DESDE OTRO ARCHIVO .PHP-->
                                <?php
                                  include("vista-admin-buttons.php");
                               
                                ?>
                               </div>
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
                    </div> <!--ROW COLLAPSIBLE-->
                   </section>
               </div>
            
            <div class="row section">
                   <section class="col s11 m11 l11">
                    <div class="row">
                       <ul class="collapsible col offset-s1 s11 m12 l12 teal lighten-5" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header active grey darken-1 white-text opcion3"><span class="tercero"><i class="material-icons right">arrow_drop_up</i></span><span class="tercero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span><span class="truncate">Ordenes finalizadas</span></div>
                                <div class="collapsible-body teal lighten-5">
                        <!-- TABLA DE ORDENES FINALIZADAS -->
                                     <table class="responsive-table striped highlight display nowrap" id="table_tres">
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Ingreso</th>
                                    <th>Cliente</th>
                                    <th>Producto</th>
                                    <th>Tipo</th>
                                    <th>Detalles</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>

                            <tbody>
<?php
//Selecciona de la base de datos todas las ordenes de trabajo pertenecientes  a la empresa/taller logueado donde el estado de orden sean "finalizadas, cerradas, canceladas o rechazadas"
$sql = "SELECT O.*, U.apellido, U.nombre, P.tipo, P.marca, P.modelo, OT.nombreTipoOrd, OE.nombreEstadoOrd
            FROM ordenes O JOIN usuarios U ON O.idCliente = U.idUsuario
                       JOIN ordenes_tipos OT ON O.idTipo = OT.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       JOIN productos P ON P.idProducto = O.idProducto
                       WHERE O.idAdmin = '".$_SESSION["idUsuario"]."' 
                       AND (O.idEstado = '2'  OR O.idEstado = '3'  OR O.idEstado = '4' OR O.idEstado ='6')
                       ORDER BY O.fechaIngreso DESC";
                       
$rs = mysqli_query($conexion, $sql);
if($rs) {
    while ($r = mysqli_fetch_array($rs)){
?>
                            <tr>
                                <td><?php echo $r["idOrden"] ?></td>
                                <td><?php echo $r["fechaIngreso"] ?></td>
                                <td><?php echo $r["apellido"] . " " . $r["nombre"] ?></td>
                                <td><?php echo $r["tipo"] . " " . $r["marca"] . " " . $r["modelo"]; ?></td>
                                <td><?php echo $r["nombreTipoOrd"] ?></td>
                                <div id="columnas-ver-editar">
                               <!-- COLUMNAS VER EDITAR TRAIDAS DESDE OTRO ARCHIVO .PHP-->
                                <?php
                                 include("vista-admin-buttons.php");
                                ?>
                               </div>
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
               </div>
            </section>
            <section class="hide col offset-s3 s7 m3 l2 section">
                <div class="row">
                    <section class="col s12 m12 l12">
                        <form role="search">
                            <div class="input-field">
                                <input id="search" name="busquedaAdmin" type="search" class="label-icon" placeholder="Nombre, apellido o nº orden" size="30" minlength="3" maxlength="20">
                                <label class="label-icon" for="search"></label>
                                <button class="btn">Buscar</button>
                            </div>
                        </form>
                    </section>        
                </div>
                <div class="row section">
                    <div class="col s12 m12 l12">
                        <div class="card blue-grey darken-1 show-on-medium-and-up hide-on-small-only">
                            <div class="card-content white-text">
                                <span class="card-title">Trabajos Pendientes</span>
                                <p>Usted tiene trabajos pendientes desde el dia 22/10/2017</p>
                            </div>
                            <div class="card-action ">
                              <a href="#">Verificar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row container center-align">
                    <section class="col s12 m12 l12 green hide-on-small-only">
                        <h5 class="white-text">Info Gral</h5>
                    </section>
                </div>
                 <!--<section class="col l3">-->
                        <!--<div><a href="?p=nueva-orden" class="btn"><i class="material-icons right"></i></i>AGREGAR</a></div>-->
                 <!--   </section>-->
                
            </section>
        </div>
    </main>
</div>

<script type="text/javascript" src="../js/editar-orden.js"></script>


