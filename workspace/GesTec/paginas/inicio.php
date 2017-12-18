  <?php
	session_start();
	require("conexion.php");
	if(isset($_SESSION['idUsuario'])) {
		
		header("Location: ?p=vista-admin");
	}
	?>
  <main> 
    <section id="showbox" class="valign-wrapper row container">
        <div class="section center-align col s12 m12 l12">
            <h3 class="white-text">GESTOR DE REPARACIONES</h3>
                <p class="white-text">El mejor sistema para empresas y clientes en todo el mundo!</p>
                <span class="<?php echo $pagina == 'login' ? 'active' : ''; ?>"><a href="?p=login" class="light-blue-text text-lighten-5 waves-effect waves-green btn">INGRESAR</a></span>
        </div>
    </section>
    <section class="container">
        <div class="section">
        <div class="section grey lighten-1 z-depth-3">
            <h4 class="center-align">Planes a Medida</h4>
                <div class="row">
                    <div class="col l4 m4 s12 center-align">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                 <img class="activator" src="img/startup2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Plan Startup<i class="material-icons right">more_vert</i></span>
                                <p><a></a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Plan Startup<i class="material-icons right">close</i></span>
                                  <p>300 ordenes de trabajo por mes</p>
                                  <p>Sin limites de ordenes totales</p>
                                  <p>Acceso a todas las funcionalidades del sistema</p>
                                  <p>Backup Diario</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m4 s12 center-align">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                 <img class="activator" src="img/business.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Plan Business<i class="material-icons right">more_vert</i></span>
                                <p><a></a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Plan Business<i class="material-icons right">close</i></span>
                                  <p>700 ordenes de trabajo por mes</p>
                                  <p>Sin limites de ordenes totales</p>
                                  <p>Acceso a todas las funcionalidades del sistema</p>
                                  <p>Backup Diario</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m4 s12 center-align">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                 <img class="activator" src="img/corporate3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Plan Corporate<i class="material-icons right">more_vert</i></span>
                                <p><a></a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Plan Corporate<i class="material-icons right">close</i></span>
                                  <p>1600 ordenes de trabajo por mes</p>
                                  <p>Sin limites de ordenes totales</p>
                                  <p>Acceso a todas las funcionalidades del sistema</p>
                                  <p>Backup Diario</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center-align <?php echo $pagina == 'planes' ? 'active' : ''; ?>"><a href="?p=planes" class="waves-effect btn deep-orange pulse">Elige el tuyo</a></div>
        </div>
        </div>
        <div class="divider"></div>
    </section>
    <section class="section container">
      <div class="row">
        <div class="col s12 m6 l6 center-align">
          <h4 class="indigo-text text-lighten-1">Empresas</h4>
            <p>Control de personal</p>
			<p>Estructura jerarquica</p>
			<p>Historial del servicio</p>
			<p>Disponibilidad</p>
			<p>Facturacion</p>
        </div>
        <div class="col s12 m6 l6 center-align">
          <img src="img/muestra.png" class="z-depth-5 responsive-img materialboxed"></img>
        </div>
      </div>
    </section>
    <section class="section container">
      <div class="row">
        <div class="col s12 m6 l6 center-align">
            <img src="img/laptop.jpg" class="z-depth-5 responsive-img materialboxed"></img>
          </div>
        <div class="col s12 m6 l6 center-align">
          <h4 class="indigo-text text-lighten-1">Clientes</h4>
            <p>Ver el estado de las reparaciones</p>
			<p>Visualizacion de cada una de sus reparaciones</p>
		    <p>Poder decidir si comprar o no un repuesto</p>
			<p>Ver anotaciones de los tecnicos, con referencia a nuestra reparacion</p>
			<p>Facturacion</p>
        </div>
      </div>
    </section>
    
    </main>