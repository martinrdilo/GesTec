
<body>
   <main class="section container">    
        <h4>Consultas</h4>
            <form method="POST" id="formNewClient" action="?p=cliente-ingresado">
        <div class="row">
            <div class="col s12 l12">
                <div class="input-field">
                    <input id="id_user" name="id_user" type="hidden">
                </div>
            </div>
        <div class="row">
            <div class="col s12 l6">
                <div class="input-field">
                    <input id="titulo_asunto" name="titulo_asunto" type="text">
                    <label for="titulo_asunto">Ingrese asunto</label>
                </div>
            </div>
            <div class="col s12 l6">
                
            </div>
        </div>
        <div class="row">
            <div class="col s12 l12">
            <div class="input-field">
                    <textarea id="textarea1" name="comentario_gral" class="materialize-textarea" data-length="300"></textarea>
					<label for="textarea1">Ingrese su consulta</label>
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col offset-s4 s6 offset-l5 l6">
                        <div class="input-field">
                            <input type="submit" value="Enviar" class="btn" id="enviarClient">
                        </div>
                    </div>
                </div>
            </form>
    </main>
