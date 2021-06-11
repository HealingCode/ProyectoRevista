<?php session_start() ?>
<html>


<body>

<?php


if(isset($_SESSION['login_user'])){
  ECHO "
  <form action='../../php/auth/auth_uploadPdf.php' method= 'post' enctype='multipart/form-data'>
       Upload a File:
       <input type= 'file' name='the_file' id='fileToUpload'>
       <input type='submit' name='submit' value='Subir'>
   </form>
   ";
 }else{
   ECHO "Debes iniciar sesion primero para subir un archivo";
 }
?>
</body>

</html>
