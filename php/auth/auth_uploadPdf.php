<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\sql_injection\Select_Revistas.php';
$sqlRevista = new sqlRevista();

   $uploadDirectory = "../../vistas/Revistas/";
   $errors = []; // Store errors here

   $fileExtensionsAllowed = ['pdf']; // These will be the only file extensions allowed

   $fileName = $_FILES['the_file']['name'];
   $fileSize = $_FILES['the_file']['size'];
   $fileTmpName  = $_FILES['the_file']['tmp_name'];
   $fileType = $_FILES['the_file']['type'];
   $tmpNoerr= explode('.', $fileName);
   $fileExtension = strtolower(end($tmpNoerr));

   $uploadPath = $uploadDirectory . basename($fileName);
echo '<br>';

   if (isset($_POST['submit'])) {

     if (! in_array($fileExtension,$fileExtensionsAllowed)) {
       $errors[] = "Por favor sube un archivo PDF xd";
     }

     if ($fileSize > 20000000) {
       $errors[] = "Tu archivo pesa mas de (20MB)";
     }

     if (empty($errors)) {
       $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
/*AQUI SE LLAMA LA SENTENCIA SQL QUE ALMACENA EL PATH*/
      $sqlRevista -> insertRevista($_POST["nombre"],$_POST["editorial"],$_POST["autor"],$uploadPath);


       if ($didUpload) {
         echo "The file " . basename($fileName) . " has been uploaded";
       } else {
         echo "An error occurred. Please contact the administrator.";
       }
     } else {
       foreach ($errors as $error) {
         echo $error . "These are the errors" . "\n";
       }
     }

   }

 ?>
