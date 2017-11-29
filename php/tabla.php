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
	<label>codigo pregunta</label> &nbsp;<input type="text" name="pregunta" value="11" disabled id="pregunta" class="sol"> <label>Considera que la Empresa Simulada en el Aula es un aporte para su desarrollo profesional?</label>
	<div>
		<br>
		<label>codigo seccion&nbsp;&nbsp;&nbsp;</label> <input type="text" name="secion" id="seccion" class="sol">
		<?php
		include "conexion.php";
		$user_id=null;

		if(!empty($_POST)){
			$sql2= "select seccion.nombre from seccion where  seccion.id=\"$_POST[secion]\"";
			$q = $con->query($sql2);
			if($q->num_rows>0){
				$d=$q->fetch_array();
				echo '<form>';
				echo '<input type="text" name="sec" id="nom_seccion" disabled class="luna" value="'.$d["nombre"].'">'; 
				echo '</form>';
			}
		}
		?>

		<button action="ver.php" class="btn btn-primary">filtrar</button>
	</div>
</form>
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
				<td  name="id" ><?php echo $r["id"]; ?></td>
				<td><?php echo $r["nombre"]; ?></td>
				<td><?php echo $r["apellido"]; ?></td>
				<td><?php echo $r["seccion"]; ?></td>
				<td><?php
				echo '<form>'; 
				echo '<input type="text" class="sol form-control" name="nota" value="'.$r["nota"].'" />';
				echo '</form>';
				?></td>
				<!--<td style="width:150px;">
					<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
					<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
					<script>
						$("#del-"+<?php echo $r["id"];?>).click(function(e){
							e.preventDefault();
							p = confirm("Estas seguro?");
							if(p){
								window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

							}

						});
					</script>
				</td>-->
			</tr>
		<?php endwhile;?>

	</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
<div>
	<form role="form" method="post" action="php/update_notas.php"> 
		<button class="btn btn-sm btn-success perro">Guardar
			
		</button>
	</form>
</div>