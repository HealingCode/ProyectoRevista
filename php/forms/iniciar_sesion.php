<html>
<head>
  <title>Iniciar Sesion </title>
  <!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<scriptsrc="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Los iconos tipo Solid de Fontawesome-->
<linkrel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<scriptsrc="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Nuestro css-->
<linkrel="stylesheet"type="text/css"href="vistas/styles/my.css">
</head>
<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
<body>

  <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
      <div class="modal-content">
        <div class="col-12 user-img">
          <img src='../../user.png'/>
        <!--  <form method='POST' action="\php\auth\auth_inicioSesion.php">
            <h1> Inicia Sesion! YA! </h1>
            <p> Email </p>
            <input type = "email" name = "email" required>
            <p>Contraseña</p>
            <input type = "password" name ="pass" required>
            <input type = "submit" name = "envioIniSesion" value="Confirmar">
          </form>-->
      </div>
        <form method='POST' action="\php\auth\auth_inicioSesion.php" class="col-12 ">
          <div class="form-group" id="user-group">
            <input type="text" name = "email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group" id="contrasena-group">
            <input type="password" name ="pass" class="form-control" placeholder="Contraseña" required>
          </div>
          <button type="submit" name = "envioIniSesion" class="btn btn-primary"><i class="fas fas-sing-in-alt"></i>  Confirmar </button>
        </form>
        <div class="col-12 forgot">
          <a href="#">Recordar Comtraseña</a>
        </div>


      </div>
    </div>
  </div>

  </body>

<html>
