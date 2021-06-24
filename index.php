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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a href="#" class="navbar-brand text-danger font-weight-bold"><img src = 'Escudo_UdeG.png' height = "100">Revista UdeG </a>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">

	    <ul class="navbar-nav ml-2">
		    <form class="form-inline my-1 my-lg-0">
			    <input type="search" id="search" class="form-control mr-sm-2" placeholder="Buscar Revista">
			    <button class="btn btn-danger my-2 my-sm-0" type="submit">Buscar</button>

      <!--   <button class="btn btn-success btn-sm ml-0" type="submit">iniciar sesion</button>
          <button class="btn btn-success btn-sm" type="submit">Registrarce</button>
      -->

		    </form>
      </ul>
    </div>

  </nav>

<body>

<div class = "contenedor">



links veloces
<br>

<a href="php/forms/registrar_usuario.php"> Registrarse fast </a>
<br>
<a href="php/forms/iniciar_sesion.php"> Inciar sesion fast </a>
<br>
<a href="php/forms/subir_pdf.php"> Subir un PDF fast, que pide iniciar sesion </a>
<br>
<a href="php/logic/logout.php"> Logout </a>






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



  <FOOTER>

  </FOOTER>



</body>

</html>
