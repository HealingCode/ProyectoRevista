<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\injectionSQL.php';

$sql = new sqlRevista();

$ciencia = $sql -> selectRevistasCiencia();
$literatura = $sql -> selectRevistasLiteratura();
$biologia = $sql -> selectRevistasBiologia();
$cocina = $sql -> selectRevistasCocina();

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

          <button class="btn btn-success btn-sm ml-0" type="submit">iniciar sesion</button>
          <button class="btn btn-success btn-sm" type="submit">Registrarce</button>


		    </form>
      </ul>
    </div>

  </nav>

<body>

<div class = "contenedor">

  <!--<HEADER>

    <h1>REVISTAS JUAN</h1>

  </HEADER>-->



  <!--<div class = "cuerpo" > -->
  <div class="p-3 mb-2 bg-dark text-white">



    <h2>Descarga aquí!</h2>

    <h3> CIENCIA </h3>

    <?php

    echo '<TABLE>';

    while($row = mysqli_fetch_array($ciencia))
    {

    echo '<tr>' . $row["nombre"];
    echo '</tr>';
    echo '<br>';
    echo '<tr>' . $row["editorial"];
    echo '</tr>';
    echo '<br>';
    echo '<tr>' . $row["autor"];
    echo '</tr>';
    echo '<br>';
    echo '~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~';
    echo '<br>';

    }

    ?>

    <h3> LITERATURA </h3>


    <h3> COCINA </h3>

S
    <h3> BIOLOGIA </h3>
    </div>


  <!--</div>-->


  <FOOTER>

  </FOOTER>

</div>

</body>

</html>
