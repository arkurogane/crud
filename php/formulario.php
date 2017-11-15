<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from alumnos where id = ".$_GET["id"];
$query = $con->query($sql1);
$alumnos = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $alumnos=$r;
  break;
}

  }
?>

<?php if($alumnos!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $alumnos->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $alumnos->apellido; ?>" name="apellido" required>
  </div>
  <div class="form-group">
    <label for="seccion">Seccion</label>
    <input type="text" class="form-control" value="<?php echo $alumnos->seccion; ?>" name="seccion" required>
  </div>
  <div class="form-group">
    <label for="nota">Nota</label>
    <input type="text" class="form-control" value="<?php echo $alumnos->nota; ?>" name="nota" >
  </div>
<input type="hidden" name="id" value="<?php echo $alumnos->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>