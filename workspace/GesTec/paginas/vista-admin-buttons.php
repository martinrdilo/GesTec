
<!-- COLUMNA VER DETALLE DE ORDEN -->
            <td><a class="btn modal-trigger" href="#modal<?php echo $r["idOrden"]; ?>">VER</a>
                <!-- Modal Structure VER DETALLE TRABAJO -->
                    <div id="modal<?php echo $r["idOrden"]; ?>" class="modal">
                    <div class="modal-content black-text">
                    <h4>Detalle de su reparacion</h4>
                        <table class="responsive-table centered">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Diagnostico</th>
                                    <th>Solucion</th>
                                    <th>Precio</th>
                                 </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td><?php echo $r["descripcion"]; ?></td>
                                    <td><?php echo $r["diagnostico"]; ?></td>
                                    <td><?php echo $r["solucion"]; ?></td>
                                    <td><?php echo $r["precio"]; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat hovered">Aceptar</a>
                    </div>
                    </div>
            </td>
            
            
    <!-- COLUMA EDITAR ORDEN -->
            <td><a class="btn modal-trigger orange hovered" href="#formEdit<?php echo $r["idOrden"]; ?>"><i class="large material-icons">mode_edit</i></a>
    <!-- Modal Structure EDITAR ORDEN DE TRABAJO -->
    
                <div id="formEdit<?php echo $r["idOrden"]; ?>" class="modal modal-fixed-footer">
                <div class="modal-content black-text">
                <h4>Detalles Orden de trabajo</h4>
                    <div class="row">
                        <div class="col s12  l2">
                            <div class="input-field">
                            <input disabled id="idOrden" class="idOrden" type="text" value="<?php echo $r["idOrden"] ?>">
                            <label for="idorden">Orden</label>
                            </div>
                        </div>

                        <div class="col s12 offset-l1 l2">
                            <div class="input-field">
                                <input disabled id="ingreso" type="text" value="<?php echo $r["fechaIngreso"] ?>">
                                <label for="ingreso">Ingreso</label>
                            </div>
                        </div>
                            
                        <div class="col s12 offset-l1 l2">
                            <div class="input-field">
                                <input disabled id="marca" type="text" value="<?php echo $r["marca"] ?>">
                                <label for="producto">Marca</label>
                            </div>
                        </div>
                            
                        <div class="col s12 offset-l1 l2">
                            <div class="input-field">
                                <input disabled id="producto" type="text" value="<?php echo $r["tipo"] ?>">
                                <label for="producto">Producto</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l3">
                            <div class="input-field">
                                <input disabled id="cliente" type="text" value="<?php echo $r["apellido"] . " " . $r["nombre"] ?>">
                                <label for="cliente">Cliente</label>
                            </div>
                        </div>
                
                        <div class="col s12 offset-l1 l3">
                            <div class="input-field">
                                 <select name="estadoOrden" class="estadoOrden" >
                                    <option class="estadoOrden" value="<?php echo $r["idEstado"]; ?>" disable selected><?php echo $r["nombreEstadoOrd"] ?></option>
                                    <?php 
                                    //Traigo todos los tipos de trabajos que sean distintos al que hay en la base de datos
                                        $sql3 = "SELECT idEstado, nombreEstadoOrd FROM ordenes_estados WHERE idEstado != '".$r["idEstado"]."' AND idEstado != '7' "; 
                                        $rs3 = mysqli_query($conexion, $sql3);
                                        if($rs3) {                                  
                                            while ($r3 = mysqli_fetch_array($rs3)){
                                    ?>
                                    <option class="estadoOrden" value="<?php echo $r3["idEstado"]; ?>"><?php echo $r3["nombreEstadoOrd"]; ?> </option>
                                    <?php                                        
                                            }
                                        } 
                                    ?>
                                </select>
                                <label for="estadoOrden">Estado del trabajo</label>
                            </div>
                        </div>
                        <div class="col s12 offset-l1 l3">
                            <div class="input-field">
                                 <select name="tipoOrden" class="tipoOrden">
                                    <option value="<?php echo $r["idTipo"]; ?>" disable selected><?php echo $r["nombreTipoOrd"] ?></option>
                                    <?php 
                                    //Traigo todos los tipos de trabajos que sean distintos al que hay guardado en la orden actualmente
                                        $sql2 = "SELECT idTipo, nombreTipoOrd FROM ordenes_tipos WHERE idTipo != '".$r["idTipo"]."'"; 
                                        $rs2 = mysqli_query($conexion, $sql2);
                                        if($rs2) {                                  
                                            while ($r2 = mysqli_fetch_array($rs2)){
                                    ?>
                                    <option value="<?php echo $r2["idTipo"];?>"><?php echo $r2["nombreTipoOrd"];?></option>
                                    <?php                                        
                                            }
                                        } 
                                    ?>
                                </select>
                                <label for="tipoOrden">Tipo de trabajo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l4">
                            <div class="input-field">
                                <!--<input name="descripcion" class="descripcion" type="text" value="">-->
                                <!--<label for="descripcion">Descripcion</label>-->
                                <textarea name="descripcion" id="descripcion" class="materialize-textarea descripcion" data-length="150"><?php echo $r["descripcion"] ?></textarea>
                                <label for="descripcion">Descripcion</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l4">
                            <div class="input-field">
                                <textarea class="materialize-textarea diagnostico" id="diagnostico" name="diagnostico" data-length="150" ><?php echo $r["diagnostico"] ?></textarea>
                                <label for="diagnostico">Diagnostico</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l4">
                            <div class="input-field">
                                <!--<input name="solucion" class="solucion" type="text" value="">-->
                                <!--<label for="solucion">Solucion</label>-->
                                <textarea name="solucion" id="solucion" class="materialize-textarea solucion" data-length="150"><?php echo $r["solucion"] ?></textarea>
                                <label for="solucion">Solucion</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l4">
                            <div class="input-field">
                                <input name="precio" class="precio" type="text" value="<?php echo $r["precio"] ?>">
                                <label for="precio">Precio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="actualizar modal-close waves-effect waves-green btn-flat hovered" data-id="<?php echo $r["idOrden"]; ?>">Actualizar</button>
                    <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cerrar</a>
                </div>
                </div>
            </td>
