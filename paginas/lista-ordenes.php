<?php
//Selecciona de la base de datos todas las ordenes de trabajo pertenecientes  a la empresa/taller logueado donde el estado de orden sea "EN CURSO"
$sqlOrdenes = "SELECT O.*, U.apellido, U.nombre, P.tipo, P.marca, P.modelo, OT.nombreTipoOrd, OE.nombreEstadoOrd
        FROM ordenes O JOIN usuarios U ON O.idCliente = U.idUsuario
                       JOIN ordenes_tipos OT ON O.idTipo = OT.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       JOIN productos P ON P.idProducto = O.idProducto
                       WHERE O.idAdmin = '".$_SESSION["idUsuario"]."' AND O.idEstado = '1'
                       ORDER BY O.fechaIngreso DESC";
                       
$rsOrdenes = mysqli_query($conexion, $sqlOrdenes);

?>

<body>
    <main class="container">
        <div id="listaOrdenes">
            <div class="row">
    
<main class="col l12 grey lighten-4 z-depth-1">
        <div class="row section container">
           <section class="col l9">
               <div class="row section">
                   <section class="col l12">
                       <ul class="collapsible" data-collapsible="accordion">
                            <li>
                            <div class="collapsible-header active grey darken-1 white-text opcion"><span class="primero"><i class="material-icons right">arrow_drop_up</i></span><span class="primero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span>Ordenes en curso</div>
                            <div class="collapsible-body teal lighten-5">
                                <table class="responsive-table highlight">  
                                <!-- TABLA ORDENES EN CURSO -->
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
                                    <?php while ($orden = mysqli_fetch_array($rsOrdenes)) :  ?>
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
                                      <!--        <td><a class="btn red hovered" href="#remove"><i class="large material-icons">delete</i></a>   -->
                                      </tr>
                                    <?php endwhile; ?>
                                  </tbody>
                              </table>
                            </div>
                            </li>
                        </ul>
                       

                   </section>
               </div>
    
        </div>
    </main>
