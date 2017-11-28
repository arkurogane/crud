<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["seccion"])){
		if($_POST["nombre"]!=""&& $_POST["apellido"]!=""&&$_POST["seccion"]!=""){
			include "conexion.php";
			
			$sql = "insert into alumnos(nombre,apellido,seccion) values (\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[seccion]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../insertar.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../insertar.php';</script>";

			}
		}
	}
}{}



?>