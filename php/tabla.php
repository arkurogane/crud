<style type="text/css">
.sol{
	width: 60px;
	border-radius: 5px;
}
.perro{
	float: right;
	margin-bottom: 30px;
	margin-left: 20px;
}
.luna{
	width: 300px;
	border-radius: 5px;
}
</style>


<form action="ver.php" method="post">
	<label>codigo pregunta</label> &nbsp;<input type="text" value="11" disabled class="sol"> <label>Considera que la Empresa Simulada en el Aula es un aporte para su desarrollo profesional?</label>
	<div>
		<br>
		<label>codigo seccion&nbsp;&nbsp;&nbsp;</label> <input type="text" name="secion" class="sol">
		<?php
		include "conexion.php";
		$user_id=null;

		if(!empty($_POST)){
			$sql2= "select seccion.nombre from seccion where  seccion.id=\"$_POST[secion]\"";
			$q = $con->query($sql2);
			if($q->num_rows>0){
				$d=$q->fetch_array();
				
				echo '<input type="text" name="sec" id="nom_seccion" disabled class="luna" value="'.$d["nombre"].'">'; 
				
			}
		}
		?>

		<button action="ver.php" class="btn btn-primary">filtrar</button>
	</div>
</form>
<form action="php/update.php" method="post">
<br>
<?php
include "conexion.php";
$user_id=null;

if(!empty($_POST)){
	$sql1= "select alumnos.id,nombre,apellido,seccion,notas.nota,id_pregunta from alumnos, notas, preguntas where id_pregunta=11 and alumnos.id=notas.id_alumno and seccion=\"$_POST[secion]\" and preguntas.id=id_pregunta order by seccion asc";
	$query = $con->query($sql1);
}else{
	$sql1= "select alumnos.id,nombre,apellido,seccion,notas.nota,id_pregunta from alumnos, notas, preguntas where id_pregunta=11 and alumnos.id=notas.id_alumno and preguntas.id=id_pregunta order by seccion asc";
	$query = $con->query($sql1);
}
?>
<?php if($query->num_rows>0):?>
	<input type="text" name="pregunta" value="11" class="sr-only">

		<table class="table table-bordered table-hover">
			<thead>
				<th >ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>seccion</th>
				<th>Nota</th>
				<!--<th></th>-->
			</thead>
			<?php while ($r=$query->fetch_array()):?>
				<tr>
				<td ><?php echo $r["id"]; 
				echo '<input type="text" name="id[]" class="sr-only" value="'.$r["id"].'" />';
				//<input type="text" name="id[]" value=$r["id"]>
				?></td>
				<td><?php echo $r["nombre"];?></td>
				<td><?php echo $r["apellido"];?></td>
				<td><?php echo $r["seccion"];?></td>
				<td><?php
				echo '<input type="text" class="sol form-control" name="nota[]" value="'.$r["nota"].'" />';
				?></td>
			</tr>
		<?php endwhile;?>

	</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
<div>
	<button type="submit" class="btn btn-sm btn-success perro">Guardar</button>
</form>
</div>