<style type="text/css">
.sol{
	width: 60px;
}
.perro{
	float: right;
	margin-bottom: 30px;
	margin-left: 20px;
}
.luna{
	width: 300px;
}
</style>

<?php

include "conexion.php";
$user_id=null;
$sql1= "select alumnos.id,nombre,apellido,seccion,notas.nota from alumnos, notas, preguntas where alumnos.id=notas.id_alumno and preguntas.id=notas.id_pregunta order by seccion asc";
$query = $con->query($sql1);

?><form action="ver.php" method="post">
	<label>codigo pregunta</label> &nbsp;<input type="text" name="pregunta" id="pregunta" class="sol"> <label>Considera que la Empresa Simulada en el Aula es un aporte para su desarrollo profesional?</label>
</div>
<div>
	<br>
	<label>codigo seccion</label> <input type="text" name="codigo" id="secion" class="sol"> <input type="text" name="sec" id="nom_seccion" class="luna"> 
	<button action="ver.php" class="btn btn-primary">filtrar</button>
</div>
</form>
<br>

<?php if($query->num_rows>0):?>
	<table class="table table-bordered table-hover">
		<thead>
			<th class="sr-only">ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>seccion</th>
			<th>Nota</th>
			<!--<th></th>-->
		</thead>
		<?php while ($r=$query->fetch_array()):?>
			<tr>
				<td  name="id" class="sr-only"><?php echo $r["id"]; ?></td>
				<td><?php echo $r["nombre"]; ?></td>
				<td><?php echo $r["apellido"]; ?></td>
				<td><?php echo $r["seccion"]; ?></td>
				<td><?php
				echo '<form>'; 
				echo '<input type="text" class="sol" name="nota" value="'.$r["nota"].'" />';
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
	<form role="form" method="post" action="ver.php"> 
		<button id="<?php echo $r["alumno.id"];?>" class="btn btn-sm btn-success perro">Guardar
			<?php

			if(isset($_POST["nota"])){
				if($_POST["nota"]!=""){
					include "conexion.php";
					$nota=array(nota);
					print "$nota[1]";
					for($i=0;$i<sizeof($nota);$i+=1){

						$sql = "update notas set nota=\"$nota[$i]\" where notas.id_alumno=\"$_POST[id]\" and notas.id_pregunta=\"$_POST[pregunta]\ ";
						print "$nota[$i]";
						$query = $con->query($sql);
					}
					if($query!=null){
						print "<script>alert(\"Agregado exitosamente.\");window.location='ver.php';</script>";
					}else{
						print "<script>alert(\"No se pudo agregar.\");window.location='ver.php';</script>";

					}
				}
			}{}
			?>
		</button>
	</form>
</div>