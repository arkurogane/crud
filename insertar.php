<html>
<head>
	<title>Agregar</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<?php include "php/navbar2.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Agregar</h2>

				<div class="modal-body">
					<form role="form" method="post" action="php/agregar.php">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" required>
						</div>
						<div class="form-group">
							<label for="apellido">Apellido</label>
							<input type="text" class="form-control" name="apellido" required>
						</div>
						<div class="form-group">
							<label for="seccion">Seccion</label>
							<input type="text" class="form-control" name="seccion" required>
						</div>
						<button type="submit" class="btn btn-default">Agregar</button>
					</form>
				</div>

			</div>
		</div>
	</div>

	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>