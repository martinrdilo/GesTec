<td>
<a class="btn modal-trigger" href="#modal<?= $orden["idOrden"]; ?>">VER</a>
<div id="modal<?= $orden["idOrden"]; ?>" class="modal">
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
                    <td><?= $orden["nombreEstadoOrd"]; ?></td>
                    <td><?= $orden["descripcion"]; ?></td>
                    <td><?= $orden["diagnostico"]; ?></td>
                    <td><?= $orden["solucion"]; ?></td>
                    <td><?= $orden["precio"]; ?></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <?php
            if ($orden["idEstado"]==5) :
                $idOrden = $orden['idOrden'];
        ?>
            <a href='#!' class='rechazar-ord modal-action modal-close waves-effect waves-red btn-flat' data-id='$idOrden'>Rechazar</a>
            <a href='#!' class='modal-action modal-close waves-effect btn-flat'>Cerrar</a>
            <a href='#!' class='aceptar-ord modal-action modal-close waves-effect waves-green btn-flat hovered' data-id='$idOrden'>Aceptar</a>
        <?php }else { ?> 
            <a href='#!' class='modal-action modal-close waves-effect waves-green btn-flat hovered'>Aceptar</a>

        <?php endif; ?>
    </div>
</div>
</td>