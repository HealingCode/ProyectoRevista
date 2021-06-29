
<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\Select_Revistas.php';
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>

<?php

if(isset($_SESSION['login_user'])){
  ECHO "
  <form action='../../php/auth/auth_uploadPdf.php' method= 'post' enctype='multipart/form-data'>
       Upload a File:
       <br>
       <input type= 'file' name='the_file' id='fileToUpload'>
       <br>
       Nombre de la revista:
       <br>
       <input type= 'text' name = 'nombre' >
       <br>
       Nombre del editorial:
       <br>
       <input type= 'text' name = 'editorial'>
       <br>
       Nombre del autor:
       <br>
       <input type = 'text' name = 'autor'>
       ";



  ECHO "
  <br>
  <br>
  <input type='submit' name='submit' value='Subir'>
  </form>
   ";
 }else{
   ECHO "Debes iniciar sesion primero para subir un archivo";

 }
?>
<br>
<a href="iniciar_sesion.php"class="btn btn-success btn-sm active border border-white" role="button" aria-pressed="true"> Inciar sesion </a>

</body>

</html>
