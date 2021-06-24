<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\Select_Revistas.php';

$sql = new sqlRevista();

$revistas = $sql -> selectRevistas();

?>

<html>

<head>

<title>Revistas UdeG</title>
<link rel="stylesheet" type="text/css" href="vistas/styles/style_general.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- https://www.w3schools.com/bootstrap4/bootstrap_tables.asp -->

<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
</head>

<HEADER>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a href="../../index.php" class="navbar-brand text-danger font-weight-bold"><img src = 'Escudo_UdeG.png' height = "100">Revista UdeG </a>
      ||<a href="php/forms/registrar_usuario.php"> Registrarse</a> ||
      <a href="php/forms/iniciar_sesion.php"> Inciar sesion</a>||
      <a href="php/forms/subir_pdf.php"> Subir un PDF fast</a>||
      <a href="php/logic/logout.php"> Logout</a> ||
  </nav>



</HEADER>

<body>

<div class = "contenedor">

<div class = "brazoizq"> </div>
<div class = "brazoder"> </div>

  <div class = "cuerpo" >

    <?php


    while($row = mysqli_fetch_array($revistas))
    {
    echo '<div class ="fragmento"> ';

    echo '<h4>' . $row["nombre"] . "</h4>";
    echo '<br>';
    echo "Editorial: ". $row["editorial"] ;
    echo '<br>';
    echo "Autor: " .$row["autor"] ;
    echo '<br>';
    echo "<a href='". $row["dir"] . " '>Descarga Aqui!</a>";
    echo '<br>';
    echo '</div>';
    echo '<br>';
    }

    ?>
</table>

</div>

</div>

<FOOTER>
<p>
 Lorem ipsum dolor sit amet, consectetur adipisicing elit,
 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 Duis aute irure dolor in reprehenderit in voluptate
 velit esse cillum dolore eu fugiat nulla pariatur.
 Excepteur sint occaecat cupidatat non proident,
 sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
</FOOTER>



</body>

</html>
