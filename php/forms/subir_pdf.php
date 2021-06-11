<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\Select_Revistas.php';
$sql = new sqlRevista();
$temas = $sql -> selectTemas();

?>
<html>


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
       <input type = 'text' name = 'autor'>
       ";

       ECHO "
       Elije un tema:
       <br>
       <SELECT name='tema'>
       " ;
       while($row = mysqli_fetch_array($temas))
       {
        ECHO "<OPTION>". $row["tema"];
       }

  ECHO "
  </SELECT>
  <br>
  <br>
  <input type='submit' name='submit' value='Subir'>
  </form>
   ";
 }else{
   ECHO "Debes iniciar sesion primero para subir un archivo";
 }
?>
</body>

</html>
