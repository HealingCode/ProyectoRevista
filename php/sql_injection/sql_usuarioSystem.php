<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';

class sqlUsuario{

  /*FUNCIONES PARA LA TABLA DE USUARIOS*/
  function insertUser($user,$pass,$email,$nombre,$ApePate,$ApeMate){
    $conexion = conecta();
    $id='';
    mysqli_query($conexion,"INSERT INTO usuario VALUES ('$id','$user','$pass','$email','$nombre','$ApePate','$ApeMate') ");
  }


  function selectUser(){
    $conexion = conecta();
    $var = $_SESSION['login_user'];
    $result = mysqli_query($conexion, "SELECT * FROM usuario where email = '$var' ");
    return $result;
  }


  function selectFromUserEmailPass($email,$pass){
    $conexion = conecta();
    $result = mysqli_query($conexion, "SELECT id_usuario FROM usuario WHERE email='$email' AND password='$pass'");
    return $result;
  }

    function selectFromUserIdEmail($email)
    {
      $conexion = conecta();
      $result = mysqli_query($conexion, "SELECT email FROM usuario WHERE email='$email' ");
      return $result;
    }



}

?>
