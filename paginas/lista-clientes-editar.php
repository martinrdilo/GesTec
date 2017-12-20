
<!-- COLUMNA AGREGAR UNA NUEVA ORDEN -->
            <td><a class="btn modal-trigger" href="#modal<?= $cliente["idUsuario"]; ?>"><i class="large material-icons">add</i></a>
                <!-- Modal Structure VER DETALLE TRABAJO -->
                    <div id="modal<?= $cliente["idUsuario"]; ?>" class="modal">
                    <div class="modal-content black-text">
                    
                    <?php require("nueva-orden-modal.php");   ?>
                        
                    </div>
                    <div class="modal-footer">
          
                        <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cerrar</a>
                    </div>
                    </div>
            </td>
    
    <!-- COLUMNA VER DETALLE ORDEN DE TRABAJO -->
            <td><a class="btn modal-trigger" href="?p=lista-ordenes-cliente&id=<?= $cliente["idUsuario"];?>">VER</a>
            
    <!-- BOTON BORRAR ORDEN DE TRABAJO -->        
            
            <td><a class="btn modal-trigger" href="?p=editar-cliente&id=<?= $cliente["idUsuario"];?>">EDITAR</a>
            <!-- <td><a class="btn modal-trigger red delete" onClick="borrar(<?= $cliente["idUsuario"] ?>)"><i class="large material-icons">delete</i></a>
            -->
    
                
            </td>
