<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\conecta.php';

class sqlRevista{

/*CONSULTAR REVISTAS*/

function selectRevistas(){
$conexion = conecta();
$result = mysqli_query($conexion, "SELECT * FROM revista");
  return $result;
}

function insertRevista($nombre,$editorial, $autor, $dir)
{
  $conexion = conecta();
  $query = "INSERT INTO revista VALUES('', '$nombre','$editorial', '$autor', '$dir')";
  mysqli_query($conexion,$query);
}

}

?>
