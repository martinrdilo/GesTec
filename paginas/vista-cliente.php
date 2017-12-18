
<?php
    //Selecciona todos las ordenes pertenecientes al cliente logueado que tengan como estado espera aprobacion". Vendrian a ser presupuestos
    $sqlTabla1 = "SELECT O.*, A.nombre_em, P.tipo, P.marca, P.modelo , OT.nombreTipoOrd, OE.nombreEstadoOrd, O.descripcion
                FROM ordenes O JOIN administradores A ON A.idUsuario = O.idAdmin
                JOIN productos P ON P.idProducto = O.idProducto
                JOIN ordenes_tipos OT ON OT.idTIpo = O.idTipo
                JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                WHERE O.idCliente = '".$_SESSION["idUsuario"]."'  
                AND O.idEstado = '5' ";
               
    $rsTabla1 = mysqli_query($conexion, $sqlTabla1);
    $nPre = mysqli_num_rows($rsTabla1);

    $sqlTabla2 = "SELECT O.idOrden, O.fechaIngreso, A.nombre_em, P.tipo, P.marca, P.modelo , OT.nombreTipoOrd, OE.nombreEstadoOrd, O.descripcion
        FROM ordenes O JOIN administradores A ON A.idUsuario = O.idAdmin
                       JOIN productos P ON P.idProducto = O.idProducto
                       JOIN ordenes_tipos OT ON OT.idTIpo = O.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       WHERE O.idCliente ='".$_SESSION["idUsuario"]."'
                       AND O.idEstado = '1' ";
                       
    $rsTabla2 = mysqli_query($conexion, $sqlTabla2);


    $sqlTabla3 = "SELECT O.idOrden, O.fechaIngreso, A.nombre_em, P.tipo, P.marca, P.modelo , OT.nombreTipoOrd, OE.nombreEstadoOrd, O.descripcion
        FROM ordenes O JOIN administradores A ON A.idUsuario = O.idAdmin
                       JOIN productos P ON P.idProducto = O.idProducto
                       JOIN ordenes_tipos OT ON OT.idTIpo = O.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       WHERE O.idCliente ='".$_SESSION["idUsuario"]."'
                       AND O.idEstado != '1' AND O.idEstado != '5' ";
                       
    $rsTabla3 = mysqli_query($conexion, $sqlTabla3);

?>

<div class="content-cliente">
    <main class="col s12 m12 l12 grey lighten-5 z-depth-1">
        <div class="row section container">
        <section class="col s12 m12 l12">

            <div class="row section"> 
                <!-- TABLA DE PRESUPUESTOS -->
                <section class="col s12 m12 l12"> 
                <div class="row">
                    <ul class="collapsible col s12 m12 l12 teal lighten-5" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header active grey darken-1 white-text opcion"><span class="primero"><i class="material-icons right">arrow_drop_up</i></span><span class="primero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span>Usted tiene <?= $nPre;?> Presupuestos pendientes
                            </div>
                            <div class="collapsible-body teal lighten-5">
                                <table class="responsive-table centered highlight display nowrap" id="table_unoc" name="Tabla1">  <!-- TABLA DE PRESUPUESTOS -->
                                    <thead>   
                                        <tr> 
                                            <th>Presupuesto</th>
                                            <th>Fecha</th>
                                            <th>Empresa</th>
                                            <th>Producto</th>
                                            <th>Tipo de trabajo</th>
                                            <th>Detalles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($orden = mysqli_fetch_array($rsTabla1)) : ?>
                                        <tr>
                                            <td><?= $orden["idOrden"]; ?></td>
                                            <td><?= $orden["fechaIngreso"]; ?></td>
                                            <td><?= $orden["nombre_em"]; ?></td>
                                            <td><?= $orden["tipo"] . " " . $orden["marca"] . " " . $orden["modelo"]; ?></td>
                                            <td><?= $orden["nombreTipoOrd"]; ?></td>
                                            <div>
                                                <!-- Modal Structure -->
                                                <?php require("vista-cliente-buttons.php"); ?>  
                                            </div>
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
            
            <div class="row section"> <!-- TABLA DE ORDENES DE TRABAJO EN CURSO -->
            <section class="col s12 m12 l12">
            <div class="row">
                <ul class="collapsible col s12 m12 l12 teal lighten-5" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active grey darken-1 white-text opcion2"><span class="segundo"><i class="material-icons right">arrow_drop_up</i></span><span class="segundo"><i class="material-icons right" style="display: none">arrow_drop_down</i></span>Ordenes de trabajo en curso</div>
                    <div class="collapsible-body teal lighten-5">
                        <table class="responsive-table centered highlight display nowrap" id="table_dosc">  <!-- TABLA DE ORDENES DE TRABAJO EN CURSO -->
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Fecha</th>
                                    <th>Empresa</th>
                                    <th>Producto</th>
                                    <th>Tipo de trabajo</th>
                                    <th>Repuesto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($orden = mysqli_fetch_array($rsTabla2)) : ?>        
                                <tr>
                                    <td><?= $orden["idOrden"]; ?></td>
                                    <td><?= $orden["fechaIngreso"]; ?></td>
                                    <td><?= $orden["nombre_em"]; ?></td>
                                    <td><?= $orden["tipo"] . " " . $orden["marca"] . " " . $orden["modelo"]; ?></td>
                                    <td><?= $orden["nombreTipoOrd"]; ?></td>
                                    <div>
                                        <!-- Modal Structure -->
                                        <?php require("vista-cliente-buttons.php"); ?>
                                    </div>
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
            <div class="row"> <!-- TABLA DE ORDENES DE TRABAJO FINALIZADAS -->
                <section class="col s12 m12 l12">
                <div class="row">
                    <ul class="collapsible col s12 m12 l12 teal lighten-5" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header active grey darken-1 white-text opcion3"><span class="tercero"><i class="material-icons right">arrow_drop_up</i></span><span class="tercero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span>Ordenes de trabajo finalizadas y cerradas
                            </div>
                            <div class="collapsible-body teal lighten-5">
                            <table class="responsive-table centered highlight display nowrap" id="table_tresc">  <!-- TABLA DE ORDENES DE TRABAJO FINALIZADAS -->
                                <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Fecha</th>
                                        <th>Empresa</th>
                                        <th>Producto</th>
                                        <th>Tipo de trabajo</th>
                                        <th>Estado</th>
                                        <th>Detalles</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($orden = mysqli_fetch_array($rs)) : ?>        
                                    <tr>
                                        <td><?= $orden["idOrden"]; ?></td>
                                        <td><?= $orden["fechaIngreso"]; ?></td>
                                        <td><?= $orden["nombre_em"]; ?></td>
                                        <td><?= $orden["tipo"] . " " . $orden["marca"] . " " . $orden["modelo"]; ?></td>
                                        <td><?= $orden["nombreTipoOrd"]; ?></td>
                                        <td><?= $orden["nombreEstadoOrd"]; ?></td>
                                        <div>
                                            <!-- Modal Structure -->
                                            <?php require("vista-cliente-buttons.php"); ?>
                                        </div>
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
        </section>

            
        <!--<section class="col m3 l3 ">-->
            <!--<div class="row section">
                <div class="col s12 m6 l12">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Trabajos Pendientes</span>
                            <p>Usted tiene trabajos pendientes desde el dia 22/10/2017</p>
                        </div>
                        <div class="card-action">
                          <a href="#">Verificar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section">
                <section class="col l12 green">
                    <h5 class="white-text">Info Gral</h5>
                </section>
            </div>-->
        <!--</section>-->
        </div>
        
    </main>
</div>

 <script type="text/javascript" src="js/editar-orden.js"></script>

