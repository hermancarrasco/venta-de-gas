<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Gastos</title>

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
        <li class="active"><a href="#">Gastos</a></li>
        <li><a href="configuracion.php">Configuración</a></li> 
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="creditos.php">Creditos</a></li>
        <li><a href="prestamos.php">Prestamos</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li class="active"><a href="#">Gastos</a></li>
        <li><a href="configuracion.php">Configuración</a></li> 
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s4"><a class="active" href="#ingresarVenta">Gasto de <?php date_default_timezone_set("America/Santiago"); $time = time(); echo date("d-m-Y", $time) ?></a></li>
            <li class="tab col s4"><a href="#otro1">Pronto XD</a></li>
            

          </ul>
        </div>
        <div id="ingresarVenta" class="col s12">
    
         <div class="col s12 m12 l12 center">

        
          <div class="input-field"> 
            <div class="form-group">
      

             <div id="contenedorCards">
                <div class="preloader-wrapper big active">
                  <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                      <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
             </div>

            

            </div>
          </div>

        </div>
      </div>
      <div id="otro1" class="col s12">
        <div class="col s12 m12 l12" id="pronto">
            Algun dia pondre algo aqui
        </div>
      </div>
      
    </div>

  </div>
</div>


<div class="container">
  <div class="section">
    <div class="row center">



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
<script src="js/gastos.js"></script>


</body>
</html>
