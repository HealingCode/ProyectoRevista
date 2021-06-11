<html>

<head>

  <meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >

</head>

<body>

  <div class= contenedor>



  <?php
  if(isset($_POST['envioRegistro'])){

    if($_GET["auth_registroUsuario"]==false) {

      echo  "<p>Compruebe los datos</p>";

    }else{

      echo  "<p>Introduce los datos para registrarte</p>";

      }
  }
  ?>





<div class="registro">

<div class ="form">
      <form method="POST" action ="\php\auth\auth_registroUsuario.php">

        <h1>¡Registrate!</h1>
        <p> Nombre de usuario</p>
        <input type="text" name="nombreUsuario" required>
        <p> Contraseña</p>
        <input type="password" name="pass" required>
        <p>  Confirma tu contraseña</p>
        <input type="password" name="repass" required>
        <p>Ingresa tu email</p>
        <input type="email" name="email" required>
        <p>Nombres</p>
        <input type="text" name="nombrePila" maxlength="32" required>
        <p> apellido Paterno</p>
        <input type="text" name="apellidoPate" maxlength="32" required>
        <p> Apellido Materno* </p>
        <input type="text" name="apellidoMate" maxlength="32">
        <br>
        <input type="submit" name = "envioRegistro" value="Confirmar">
        <br>Los elementos marcados * no son obligatorios
        </form>
</div>
</div>



    </div>
</body>

</html>
