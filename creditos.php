<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Creditos</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="shortcut icon" href="favicon.png" type="image/png" />
  <style>
    .resaltar{background-color:#2196f3 ;}
  </style> 
  
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Gaskito Bellakito</a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="#">Creditos</a></li>
        <li><a href="prestamos.php">Prestamos</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="gastos.php">Gastos</a></li>
        <li><a href="configuracion.php">Configuración</a></li> 
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li class="active"><a href="#">Creditos</a></li>
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
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col l4 s12"><a class="active" href="#otorgarCredito">Otorgar Credito</a></li>
            <li class="tab col l4 s12"><a href="#pagarCredito1">Pagar Credito</a></li>
            <li class="tab col l4 s12"><a href="#listarCreditos">Ver Creditos Otorgados</a></li>

          </ul>
        </div>
        <div id="otorgarCredito" class="col s12">

         <div class="col s12 m12 l12 center">
          <form action="" method="POST">
            <legend>Formulario de Creditos</legend>
            <div class="col s12 m12 l12 center" id="productos">
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
            <div class="input-field"> 
              <div class="form-group">
                <div class="input-field col s12">
                  <label for="rangoCantidadCredito">Cantidad</label>
                  <p class="range-field">

                    <input type="range" id="rangoCantidadCredito" value="1" min="0" max="5" />
                  </p>
                </div>
                <div class="input-field col s12">
                  <input id="txtNombre" type="text" class="validate">
                  <label for="txtNombre">Nombre</label>
                </div>
                <div class="input-field col s12">
                  <input id="txtDireccion" type="text" class="validate">
                  <label for="txtDireccion">Dirección</label>
                </div>

                <div class="input-field col s12">
                  <input id="txtPrecio" type="number" class="validate" step="100" min="0" disabled>
                  <label for="txtPrecio" id="txtpre">Precio</label>
                </div>

                <div class="input-field col s12">
                  <textarea id="txtObservacion" class="materialize-textarea"></textarea>
                  <label for="txtObservacion">Observación</label>
                </div>

              </div>
            </div>

            <button type="button" id="btnRegistrarCredito" class="btn">Registrar</button>
          </form>
        </div>
      </div>
      <div id="pagarCredito1" class="col s12">



        <div class="input-field col s12 hide-on-small-only">
          <input id="busqueda" type="text" class="validate">
          <label for="busqueda">Buscar</label>
        </div>
        <div class="col s12 m12 l12" id="pagarCredito">

        </div>
      </div>
      <div id="listarCreditos" class="col s12">
        Test 3
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
<script src="js/creditos.js"></script>


</body>
</html>
