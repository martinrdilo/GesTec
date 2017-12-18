<a class="btn modal-trigger" href="#modal<?php echo $r["idOrden"]; ?>">VER</a>
<div id="modal<?php echo $r["idOrden"]; ?>" class="modal">
    <div class="modal-content black-text">
    <h4>Detalle de su reparacion</h4>
        <table class="centered striped">
            <thead>
                <tr>
                    <th>Estado</th>
                    <th>Descripcion</th>
                    <th>Diagnostico</th>
                    <th>Solucion</th>
                    <th>Precio</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                    <td><?php echo $r["nombreEstadoOrd"]; ?></td>
                    <td><?php echo $r["descripcion"]; ?></td>
                    <td><?php echo $r["diagnostico"]; ?></td>
                    <td><?php echo $r["solucion"]; ?></td>
                    <td><?php echo $r["precio"]; ?></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <?php
        if ($r["idEstado"]==5){
            $idOrden = $r['idOrden'];
            echo " <a href='#!' class='rechazar-ord modal-action modal-close waves-effect waves-red btn-flat' data-id='$idOrden'>Rechazar</a>
        <a href='#!' class='modal-action modal-close waves-effect btn-flat'>Cerrar</a>
        <a href='#!' class='aceptar-ord modal-action modal-close waves-effect waves-green btn-flat hovered' data-id='$idOrden'>Aceptar</a>";
        }else { echo " <a href='#!' class='modal-action modal-close waves-effect waves-green btn-flat hovered'>Aceptar</a> ";
        };
        ?>
       
        
        
    </div>
</div>

<script type="text/javascript" src="../js/editar-orden.js"></script>