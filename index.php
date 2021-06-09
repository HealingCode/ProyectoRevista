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

<title>Revistas y mas!</title>
<link rel="stylesheet" type="text/css" href="vistas/styles/style_general.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- https://www.w3schools.com/bootstrap4/bootstrap_tables.asp -->

<meta name = "viewport" content="user-scalable=0, width=device-width, initial-scale=1" >
</head>

<body>

<div class = "contenedor">

  <HEADER>

    <h1>REVISTAS JUAN</h1>

  </HEADER>



  <div class = "cuerpo">

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


    <h3> BIOLOGIA </h3>


  </div>


  <FOOTER>

  </FOOTER>

</div>

</body>

</html>
