<?php
    $idCliente = $_GET["id"];
    //Selecciona de la base de datos todas las ordenes de trabajo pertenecientes al CLIENTE SELECCIONADO
    $sqlOrdenes = "SELECT O.*, U.apellido, U.nombre, P.tipo, P.marca, P.modelo, OT.nombreTipoOrd, OE.nombreEstadoOrd
            FROM ordenes O JOIN usuarios U ON O.idCliente = U.idUsuario
                           JOIN ordenes_tipos OT ON O.idTipo = OT.idTipo
                           JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                           JOIN productos P ON P.idProducto = O.idProducto
                           WHERE O.idAdmin = '".$_SESSION["idUsuario"]."' 
                           AND O.idCliente = '$idCliente'
                           ORDER BY O.fechaIngreso DESC";
    $rsOrdenes = mysqli_query($conexion, $sqlOrdenes);


?>
<body>
    <div class="row"> 
        <main class="col s12 m12 l12 grey lighten-4 z-depth-1">
            <div class="row section">
                <section class="col s12 m9 l9">
                    <div class="row">
                        <ul class="collapsible col s12 m12 l12" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header active grey darken-1 white-text opcion"><span class="primero"><i class="material-icons right">arrow_drop_up</i></span><span class="primero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span><span class="truncate">Ordenes en curso</span></div>
                                <div class="collapsible-body teal lighten-5">
                                    <table class="responsive-table striped highlight">   
                                    <!-- TABLA ORDENES DE CLIENTE SELECCIONADO -->
                                        <thead>
                                            <tr>
                                                <th>Orden</th>
                                                <th>Ingreso</th>
                                                <th>Cliente</th>
                                                <th>Producto</th>
                                                <th>Tipo de trabajo</th>
                                                <th>Detalles</th>
                                                <th>Editar</th>
                                            <!--    <th>Eliminar</th>  -->
                                            </tr>
                                        </thead>
        
                                        <tbody>
                                            <?php while ($orden = mysqli_fetch_array($rsOrdenes)) : ?>
                                                <tr> 
                                                    <td><?= $orden["idOrden"] ?></td>
                                                    <td><?= $orden["fechaIngreso"] ?></td>
                                                    <td><?= $orden["apellido"] . " " . $orden["nombre"] ?></td>
                                                    <td><?= $orden["tipo"] . " " . $orden["marca"] . " " . $orden["modelo"]; ?></td>
                                                    <td><?= $orden["nombreTipoOrd"] ?></td>
                                                    <div id="columnas-ver-editar">
                                                        <!-- COLUMNAS VER EDITAR TRAIDAS DESDE OTRO ARCHIVO .PHP-->
                                                        <?php include("vista-admin-buttons.php"); ?>
                                                    </div>
                                            <!--<td><a class="btn red hovered" href="#remove"><i class="large material-icons">delete</i></a>   -->
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <!--<section class="col l3">-->
            <!--    <div class="row section">-->
            <!--        <div class="col s12 m12 l12">-->
            <!--            <div class="card blue-grey darken-1 show-on-medium-and-up hide-on-small-only">-->
            <!--                <div class="card-content white-text">-->
            <!--                    <span class="card-title">Trabajos Pendientes</span>-->
            <!--                    <p>Usted tiene trabajos pendientes desde el dia 22/10/2017</p>-->
            <!--                </div>-->
            <!--                <div class="card-action ">-->
            <!--                  <a href="#">Verificar</a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="row">-->
            <!--        <section class="col m12 l12 green hide-on-small-only">-->
            <!--            <h5 class="white-text">Info Gral</h5>-->
            <!--        </section>-->
            <!--    </div>-->
                <!--<section class="col l3">-->
                <!--        <div><a href="?p=nueva-orden" class="btn"><i class="material-icons right"></i></i>AGREGAR</a></div>-->
                <!--</section>-->
                
            <!--</section>-->
        </div>
    </main>
</div>

<script type="text/javascript" src="js/editar-orden.js"></script>


