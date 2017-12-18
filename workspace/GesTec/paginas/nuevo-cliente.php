<body>
    <main class="section container">    
        <h4 class="section">Formulario ingreso de nuevo cliente</h4>
            <form method="POST" id="formNewClient" action="?p=cliente-ingresado">
                <div class="row">
                     <div class="col s12 l5">
                        <div class="input-field">
                            <input id="nombre" name="nombre" type="text">
                            <label for="nombre">Nombre</label>
                            <div id="sugerencias_nombre"></div>
                        </div>
                    </div>
                    <div class="col s12 offset-l1 l6">
                        <div class="input-field">
                            <input id="apellido" name="apellido" type="text">
                            <label for="apellido">Apellido</label>
                            <div id="sugerencias_apellido"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l3">
                        <div class="input-field">
                            <input id="direccion" name="direccion" type="text">
                            <label for="direccion">Direccion</label>
                        </div>
                    </div>
                    <div class="col s12 offset-l1 l4">
                        <div class="input-field">
                            <input id="email" name="email" type="email">
                            <label for="email">Email</label>
                            <div id="sugerencias_clientes"></div>
                        </div>
                    </div>
                    <div class="col s12 offset-l1 l3">
                        <div class="input-field">
                            <input id="telefono" name="telefono" type="number">
                            <label for="telefono">telefono</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l5">
                        <div class="input-field">
                            <input id="user" name="user" type="text">
                            <label for="user">Nombre de Usuario</label>
                        </div>
                    </div>
                    <div class="col s12 offset-l1 l6">
                        <div class="input-field">
                            <input id="password" name="password" type="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 offset-l5 l6">
                        <div class="input-field">
                            <input type="submit" value="Enviar" class="btn" id="enviarClient">
                        </div>
                    </div>
                </div>
            </form>
    </main>     
