<?php
include "conexion.php";

//variables recibidas por POST

$id 		=isset($_POST['id']) ? $_POST['id'] : '';
$pregunta	=isset($_POST['pregunta']) ? $_POST['pregunta'] : '';
$nota 		=isset($_POST['nota']) ? $_POST['nota'] : '';


for($i=0;$i<sizeof($nota);++$i)
{

	//echo "<br>"."update notas set nota=$nota[$i] where id_alumno=$id[$i] and id_pregunta=$pregunta";
	$sql = "update notas set nota=$nota[$i] where id_alumno=$id[$i] and id_pregunta=$pregunta";

	$query = $con->query($sql);
}


print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
?>
