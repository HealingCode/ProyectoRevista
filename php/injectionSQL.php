<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';

class sqlRevista{

/*CONSULTAR REVISTAS*/

function selectRevistas(){
$conexion = conecta();
$result = mysqli_query($conexion, "SELECT * FROM revista");
  return $result;
}

function selectRevistasCiencia(){
$conexion = conecta();
$result = mysqli_query($conexion, "SELECT * FROM revista WHERE tema = 'Ciencia' ");
  return $result;
}

function selectRevistasCocina(){
$conexion = conecta();
$result = mysqli_query($conexion, "SELECT * FROM revista WHERE tema = Cocina ");
  return $result;
}

function selectRevistasLiteratura(){
$conexion = conecta();
$result = mysqli_query($conexion, "SELECT * FROM revista WHERE tema = Literatura ");
  return $result;
}

function selectRevistasBiologia(){
$conexion = conecta();
$result = mysqli_query($conexion, "SELECT * FROM revista WHERE tema = Biologia ");
  return $result;
}

}

?>
