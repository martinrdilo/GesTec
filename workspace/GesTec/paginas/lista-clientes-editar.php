<script type="text/javascript">
    $(document).ready(function(){
        $('.modal').modal(); 
    });
</script>
<!-- COLUMNA AGREGAR UNA NUEVA ORDEN -->
<?php include("conexion.php");  ?>
            <td><a class="btn modal-trigger" href="#modal<?php echo $row_cliente["idUsuario"]; ?>"><i class="large material-icons">add</i></a>
                <!-- Modal Structure VER DETALLE TRABAJO -->
                    <div id="modal<?php echo $row_cliente["idUsuario"]; ?>" class="modal">
                    <div class="modal-content black-text">
                    
                    <?php require("nueva-orden-modal.php");   ?>
                        
                    </div>
                    <div class="modal-footer">
          
                        <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cerrar</a>
                    </div>
                    </div>
            </td>
    
    <!-- COLUMNA VER DETALLE ORDEN DE TRABAJO -->
            <td><a class="btn modal-trigger" href="?p=lista-ordenes-cliente&id=<?php echo $row_cliente["idUsuario"];?>">VER</a>
            
    <!-- BOTON BORRAR ORDEN DE TRABAJO -->        
            
            <td><a class="btn modal-trigger red delete" onClick="borrar(<?php echo $row_cliente["idUsuario"] ?>)"><i class="large material-icons">delete</i></a>
    
    
                
            </td>
<script type="text/javascript">
    
    function borrar(id) {
		location.href = "?p=eliminar-user&idUsuario=" +id;
	}

</script>