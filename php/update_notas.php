<?php


if(!empty($_POST)){
	if(isset($_POST["nota"])){
		if($_POST["nota"]!=""){
			include "conexion.php";
			$sql = "update notas set nota=\"$_POST[nota]\" where id_alumno=6 and id_pregunta=11 ";

			$query = $con->query($sql);
			if($query!=null){

				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}
?>