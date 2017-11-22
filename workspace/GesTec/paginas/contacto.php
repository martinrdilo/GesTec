
<body>
    <main class="container">
        <div id="contacto">
            <h3>Formulario de Contacto</h3>
            <section>
                <div class="row">
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input id="nombre" name="nombre" type="text">
                            <label for="nombre">Nombre completo</label>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input id="telefono" name="telefono" type="number">
                            <label for="telefono">Tel/Cel</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input id="email" name="email" type="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="input-field">
                            <input id="asunto" name="asunto" type="text">
                            <label for="asunto">Asunto</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l12">
                        <textarea id="con_contacto" name="con_contacto" class="materialize-textarea" data-length="300"></textarea>
					    <label for="con_contacto">Consulta</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-l5 l6">
                        <a href="?p=formContacto" class="btn">Enviar</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
