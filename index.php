<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Chocman</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="shortcut icon" href="favicon.png" type="image/png" />
  
</head>
<body>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Gaskito Bellakito</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="creditos.php">Creditos</a></li>
        <li><a href="prestamos.php">Prestamos</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="gastos.php">Gastos</a></li>
     <li><a href="configuracion.php">Configuración</a></li> 
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="creditos.php">Creditos</a></li>
        <li><a href="prestamos.php">Prestamos</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="gastos.php">Gastos</a></li>
       <li><a href="configuracion.php">Configuración</a></li> 
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Inicio de Sesión</h1>
      <div class="row center">
        <!--<h5 class="header col s12 light">¿Cuántos números?</h5>-->
      </div>
      <div class="row center">

      <div class="input-field col s12">
        <input id="txtUser" type="text" class="validate">
        <label for="txtPass">Usuario</label>
         
      </div>
      <div class="input-field col s12">
        <input id="txtPass" type="password" class="validate">
        <label for="txtPass">Contraseña</label>
      </div>
      <a href="#" id="btnAceptar" class="btn-large waves-effect waves-light orange">Aceptar</a>
       
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">
      <div class="row center">
       
      <div class="col s12 m12 l12 center" id="columna1">
        
      </div>
        
      </div>

     </div><!-- cierre row-->
      
      
    </div>
   

    
  </div>

  <footer class="page-footer light-blue lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/script.js"></script>
<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>

  </body>
</html>
