<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\php\injectionSQL.php';

$sql = new sqlRevista();

$ciencia = $sql -> selectRevistasCiencia();
$literatura = $sql -> selectRevistasLiteratura();
$biologia = $sql -> selectRevistasBiologia();
$cocina = $sql -> selectRevistasCocina();


?>

<html>

<body>

<h2> ciencia </h2>

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

</TABLE>

</body>

</html>
