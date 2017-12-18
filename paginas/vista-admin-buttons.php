<?php
    //Traigo todos los tipos de trabajos que sean distintos al que hay en la base de datos
    $sqlEstados = "SELECT idEstado, nombreEstadoOrd FROM ordenes_estados WHERE idEstado != '".$orden["idEstado"]."' AND idEstado != '7' "; 
    $rsEstados = mysqli_query($conexion, $sqlEstados);

    //Traigo todos los tipos de trabajos que sean distintos al que hay guardado en la orden actualmente
    $sqlTipos = "SELECT idTipo, nombreTipoOrd FROM ordenes_tipos WHERE idTipo != '".$orden["idTipo"]."'"; 
    $rsTipos = mysqli_query($conexion, $sqlTipos);

?>


<!-- COLUMNA VER DETALLE DE ORDEN -->
<td>
    <a class="btn modal-trigger" href="#modal<?= $orden["idOrden"]; ?>">VER</a>
    <!-- Modal Structure VER DETALLE TRABAJO -->
    <div id="modal<?= $orden["idOrden"]; ?>" class="modal">
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
                        <td><?= $orden["descripcion"]; ?></td>
                        <td><?= $orden["diagnostico"]; ?></td>
                        <td><?= $orden["solucion"]; ?></td>
                        <td><?= $orden["precio"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat hovered">Aceptar</a>
        </div>
    </div>
</td>

    <!-- ////////////////// COLUMA EDITAR ORDEN ///////////////////// -->
<td>
    <a class="btn modal-trigger orange hovered" href="#formEdit<?= $orden["idOrden"]; ?>"><i class="large material-icons">mode_edit</i></a>
    <!-- Modal Structure EDITAR ORDEN DE TRABAJO -->
    <div id="formEdit<?= $orden["idOrden"]; ?>" class="modal modal-fixed-footer">
        <div class="modal-content black-text">
        <h4>Detalles Orden de trabajo</h4>
            <div class="row">
                <div class="col s12  l2">
                    <div class="input-field">
                    <input disabled id="idOrden" class="idOrden" type="text" value="<?= $orden["idOrden"] ?>">
                    <label for="idorden">Orden</label>
                    </div>
                </div>

                <div class="col s12 offset-l1 l2">
                    <div class="input-field">
                        <input disabled id="ingreso" type="text" value="<?= $orden["fechaIngreso"] ?>">
                        <label for="ingreso">Ingreso</label>
                    </div>
                </div>
                    
                <div class="col s12 offset-l1 l2">
                    <div class="input-field">
                        <input disabled id="marca" type="text" value="<?= $orden["marca"] ?>">
                        <label for="producto">Marca</label>
                    </div>
                </div>
                    
                <div class="col s12 offset-l1 l2">
                    <div class="input-field">
                        <input disabled id="producto" type="text" value="<?= $orden["tipo"] ?>">
                        <label for="producto">Producto</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l3">
                    <div class="input-field">
                        <input disabled id="cliente" type="text" value="<?= $orden["apellido"] . " " . $orden["nombre"] ?>">
                        <label for="cliente">Cliente</label>
                    </div>
                </div>
        
                <div class="col s12 offset-l1 l3">
                    <div class="input-field">
                         <select name="estadoOrden" class="estadoOrden" >
                            <option class="estadoOrden" value="<?= $orden["idEstado"]; ?>" disable selected><?= $orden["nombreEstadoOrd"] ?></option>
                            <?php while ($estado = mysqli_fetch_array($rsEstados)) : ?>
                                <option class="estadoOrden" value="<?= $estado["idEstado"]; ?>"><?= $estado["nombreEstadoOrd"]; ?> </option>
                            <?php endwhile; ?>
                        </select>
                        <label for="estadoOrden">Estado del trabajo</label>
                    </div>
                </div>
                <div class="col s12 offset-l1 l3">
                    <div class="input-field">
                         <select name="tipoOrden" class="tipoOrden">
                            <option value="<?= $orden["idTipo"]; ?>" disable selected><?= $orden["nombreTipoOrd"] ?></option>
                            <?php while ($tipo = mysqli_fetch_array($rsTipos)) : ?>
                                <option value="<?= $tipo["idTipo"];?>"><?= $tipo["nombreTipoOrd"];?></option>
                            <?php endwhile; ?>
                        </select>
                        <label for="tipoOrden">Tipo de trabajo</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l8">
                    <div class="input-field">
                        <!--<input name="descripcion" class="descripcion" type="text" value="">-->
                        <!--<label for="descripcion">Descripcion</label>-->
                        <textarea name="descripcion" id="descripcion" class="materialize-textarea descripcion" data-length="150"><?= $orden["descripcion"] ?></textarea>
                        <label for="descripcion">Descripcion</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l8">
                    <div class="input-field">
                        <textarea class="materialize-textarea diagnostico" id="diagnostico" name="diagnostico" data-length="150" ><?= $orden["diagnostico"] ?></textarea>
                        <label for="diagnostico">Diagnostico</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l8">
                    <div class="input-field">
                        <!--<input name="solucion" class="solucion" type="text" value="">-->
                        <!--<label for="solucion">Solucion</label>-->
                        <textarea name="solucion" id="solucion" class="materialize-textarea solucion" data-length="150"><?= $orden["solucion"] ?></textarea>
                        <label for="solucion">Solucion</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <div class="input-field">
                        <input name="precio" class="precio" type="text" value="<?= $orden["precio"] ?>">
                        <label for="precio">Precio</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="actualizar modal-close waves-effect waves-green btn-flat hovered" data-id="<?= $orden["idOrden"]; ?>">Actualizar</button>
            <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cerrar</a>
        </div>
    </div>
</td>
