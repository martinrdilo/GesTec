<script type="text/javascript" src="../js/buscar.js"></script>


<style type="text/css">
.suggest-element{
    margin-left:5px;
    margin-top:5px;
    width:300px;
    max-height:50px;
    cursor:pointer;
}
#suggestions {
    width:300px;
    max-height:50px;
    overflow: auto;
}
</style>



<body>
    <main class="container">    
        <div id="formularioOrden">
            <!-- Paso por parametro variable from para decirle que de form proviene el action -->
            <form method="POST" id="formNewOrder" action="?p=orden-ingresada&from=lc" class="<?php echo $r_idcliente['idUsuario']?>">

                <h4>Formulario ingreso de nueva orden</h4>
                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input id="marca" name="marca" type="text" class="marca">
                            <label for="marca">Marca</label>
                            <div class="sugerencias_marca"></div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input id="producto" name="producto" type="text" class="producto">
                            <label for="producto">Producto</label>
                            <div class="sugerencias_producto"></div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                            <input id="modelo" name="modelo" type="text" class="modelo">
                            <label for="modelo">Modelo</label>
                            <div class="sugerencias_modelo"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col s12 l4">
                        <div class="input-field">
                            <!-- input Cliente  en estado disabled, solo lo selecciona de la db-->
                            <?php
                            $select_cliente = "SELECT idUsuario, nombre, apellido FROM usuarios WHERE idUsuario = '".$row_cliente["idUsuario"]."' "; 
                            $consulta_cliente = mysqli_query($conexion, $select_cliente);
                            if ($consulta_cliente){
                                if ($r_cliente = mysqli_fetch_assoc($consulta_cliente)){
                            ?>
                            <input name="cliente" type="text" value="<?php echo $r_cliente['apellido'].','.$r_cliente['nombre'] ?>" disabled>
                            <input name="idCliente" type="hidden" value="<?php echo $r_cliente['idUsuario']?>" >
                            <?php
                                }
                            }
                            ?>
                            <label for="cliente">Cliente</label>
                            <div id="sugerencias_clientes"></div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                             <select name="idTipo">
                                <option value="" selected disabled>Elija una opción</option>
                                <?php
                                $sql2 = "SELECT idTipo, nombreTipoOrd FROM ordenes_tipos"; 
                                    $rs2 = mysqli_query($conexion, $sql2);
                                    if ($rs2){
                                        while ($r2 = mysqli_fetch_array($rs2)){
                                ?>
                                        <option value="<?php echo $r2["idTipo"];?>"><?php echo $r2["nombreTipoOrd"]; ?> </option>
                                <?php                                        
                                        }
                                    } 
                                ?>
                            </select>
                            <label for="idTipo">Tipo de trabajo</label>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="input-field">
                             <select name="idEstado">
                                <option value="" selected disabled>Elija una opción</option>
                                <?php
                                    $sql3 = "SELECT idEstado, nombreEstadoOrd FROM ordenes_estados WHERE (idEstado = 1 OR idEstado = 5)"; 
                                    $rs = mysqli_query($conexion, $sql3);
                                    if ($rs){
                                        while ($r = mysqli_fetch_array($rs)){
                                ?>
                                        <option value="<?php echo $r["idEstado"];?>"><?php echo $r["nombreEstadoOrd"]; ?> </option>
                                <?php                                        
                                        }
                                    }
                                ?>
                            </select>
                            <label for="idEstado">Estado del trabajo</label>
                        </div>
                    </div>
                 </div>
                  <div class="row">
                     <div class="col s12">
                         <div class="input-field">
                             <input name="descripcion" type="text">
                             <label for="descripcion">Descripcion</label>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s12">
                         <div class="input-field">
                             <input name="diagnostico" type="text">
                             <label for="diagnostico">Diagnostico</label>
                         </div>
                     </div>
                 </div>
                <div class="row">
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input name="solucion" type="text">
                            <label for="solucion">Solucion</label>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input name="precio" type="text">
                            <label for="precio">Precio</label>
                        </div>
                    </div>
                    <div class="col s12 offset-l3 l6">
                        <div class="input-field">
                            <input type="submit" value="Agregar" class="btn" id="enviarOrden">
                        </div>
                    </div>
                </div>
            </form>
        </div>    <!--CIERRE FORMULARIO ORDEN ID -->
        <div id="procesando"></div>
    </main>     

<script type="text/javascript">
	 $(document).ready(function(){
	   $('select').material_select();

	 });
</script>