<?php
$sql = "SELECT AC.idAdmin, A.nombre_em FROM admins_clientes AC 
                                    JOIN administradores A ON A.idUsuario = AC.idAdmin 
                                    AND AC.idCliente = '".$_SESSION[""]."' ";
                                    
$cs_admins = mysqli_query($conexion, $sql);
?>

<body>
    <main class="container">
        <div class="row">
            <h3>Formulario de Contacto</h3>
            <section class="col s12 m12 l12">
                <form id="form-consul" method="POST" >
                    <div class="row">
                        <input type="hidden" name="idCliente" id="idCliente" value="<?php echo $_SESSION["idUsuario"]?>"/>
                        <div class="col s12 m6 l5">
                            <div class="input-field">
                                <input id="asunto" name="asunto" type="text">
                                <label for="asunto">Asunto</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m10 l12">
                            <textarea id="consulta_c" name="consulta_c" class="materialize-textarea" data-length="300"></textarea>
    					    <label for="consulta_c">Consulta</label>
                        </div>
                    </div>
                    <span class="col offset-s3 s8 offset-m5 m7 offset-l4 l3" id="result"></span>
                    <div class="row">
                        <div class="col  offset-s4 s6  offset-m4 m5 l6 offset-l5 l6">
                            <input type="submit" id="submit" name="submit" class=btn value="Enviar" >
                        </div>
                    </div>
                </form>    
            </section>
        </div>
    </main>
<script type="text/javascript" src="../js/editar-orden.js"></script>
<script type="text/javascript" src="../js/consulta.js"></script>