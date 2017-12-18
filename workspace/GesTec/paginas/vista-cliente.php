<?php
session_start();
require("conexion.php");
?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".button-collapse").sideNav();
        /*$('.modal-trigger').leanModal();*/
        $('#push,secton').pushpin({ top:$('#push').height() });
        $('.modal').modal();
    });
    
    $(".collapsible").click(function(){
       
    });
    
   
</script>


    <div class="content-cliente">
        <main class="col s12 m12 l12 grey lighten-5 z-depth-1">
            <div class="row section container">
            <section class="col s12 m12 l12">
            <?php
            require("sql/vista-cliente-sql.php")
            ?>
                                
            <div class="row section"> <!-- TABLA DE PRESUPUESTOS -->
                <section class="col s12 m12 l12"> 
                <div class="row">
                    <ul class="collapsible col s12 m12 l12 teal lighten-5" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header active grey darken-1 white-text opcion"><span class="primero"><i class="material-icons right">arrow_drop_up</i></span><span class="primero"><i class="material-icons right" style="display: none">arrow_drop_down</i></span>Usted tiene <?php echo $nPre;?> Presupuestos pendientes
                            </div>
                            <div class="collapsible-body teal lighten-5">
                                <table class="responsive-table centered highlight display nowrap" id="table_unoc">  <!-- TABLA DE PRESUPUESTOS -->
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
                                    <?php
                                        if ($rs) {
                                            while ($r = mysqli_fetch_array($rs)){
        
                                    ?>   
                            
                                    <tbody>
     
                                        <tr>
                                            <td><?php echo $r["idOrden"]; ?></td>
                                            <td><?php echo $r["fechaIngreso"]; ?></td>
                                            <td><?php echo $r["nombre_em"]; ?></td>
                                            <td><?php echo $r["tipo"] . " " . $r["marca"] . " " . $r["modelo"]; ?></td>
                                            <td><?php echo $r["nombreTipoOrd"]; ?></td>
                                            <td>

                                        <!-- Modal Structure -->
                                        <?php 
                                        
                                        require("vista-cliente-buttons.php"); 
                                        
                                        ?>
                                    </td>
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
                
                <div class="row section"> <!-- TABLA DE ORDENES DE TRABAJO EN CURSO -->
                <section class="col s12 m12 l12">
                <div class="row">
                    <ul class="collapsible col s12 m12 l12 teal lighten-5" data-collapsible="accordion">
                        <li>
                        <div class="collapsible-header active grey darken-1 white-text opcion2"><span class="segundo"><i class="material-icons right">arrow_drop_up</i></span><span class="segundo"><i class="material-icons right" style="display: none">arrow_drop_down</i></span>Ordenes de trabajo en curso
                        </div>
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
                                
<?php 
$sql = "SELECT O.idOrden, O.fechaIngreso, A.nombre_em, P.tipo, P.marca, P.modelo , OT.nombreTipoOrd, OE.nombreEstadoOrd, O.descripcion
        FROM ordenes O JOIN administradores A ON A.idUsuario = O.idAdmin
                       JOIN productos P ON P.idProducto = O.idProducto
                       JOIN ordenes_tipos OT ON OT.idTIpo = O.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       WHERE O.idCliente ='".$_SESSION["idUsuario"]."'
                       AND O.idEstado = '1' ";
                       
$rs = mysqli_query($conexion, $sql);
if ($rs) {
    while ($r = mysqli_fetch_array($rs)){
        
?>        
                                <tr>
                                    <td><?php echo $r["idOrden"]; ?></td>
                                    <td><?php echo $r["fechaIngreso"]; ?></td>
                                    <td><?php echo $r["nombre_em"]; ?></td>
                                    <td><?php echo $r["tipo"] . " " . $r["marca"] . " " . $r["modelo"]; ?></td>
                                    <td><?php echo $r["nombreTipoOrd"]; ?></td>
                                    <td>
                                        <!-- Modal Structure -->
                                        <?php 
                                        
                                        require("vista-cliente-buttons.php"); 
                                        
                                        ?>
                                    </td>
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
<?php 
$sql = "SELECT O.idOrden, O.fechaIngreso, A.nombre_em, P.tipo, P.marca, P.modelo , OT.nombreTipoOrd, OE.nombreEstadoOrd, O.descripcion
        FROM ordenes O JOIN administradores A ON A.idUsuario = O.idAdmin
                       JOIN productos P ON P.idProducto = O.idProducto
                       JOIN ordenes_tipos OT ON OT.idTIpo = O.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       WHERE O.idCliente ='".$_SESSION["idUsuario"]."'
                       AND O.idEstado != '1' AND O.idEstado != '5' ";
                       
$rs = mysqli_query($conexion, $sql);
if ($rs) {
    while ($r = mysqli_fetch_array($rs)){
        
?>        
                                <tr>
                                    <td><?php echo $r["idOrden"]; ?></td>
                                    <td><?php echo $r["fechaIngreso"]; ?></td>
                                    <td><?php echo $r["nombre_em"]; ?></td>
                                    <td><?php echo $r["tipo"] . " " . $r["marca"] . " " . $r["modelo"]; ?></td>
                                    <td><?php echo $r["nombreTipoOrd"]; ?></td>
                                    <td><?php echo $r["nombreEstadoOrd"]; ?></td>
                                    <td>
                                        <!-- Modal Structure -->
                                        <?php 
                                        
                                        require("vista-cliente-buttons.php"); 
                                        
                                        ?>
                                        </div>  <!-- FIN Modal Structure -->
                                    </td>
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

 <script type="text/javascript" src="../js/editar-orden.js"></script>
