<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Empresa Simulada</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<style type="text/css">
	body {
		padding-top: 40px;
		background-color: #d3c704;
	}
	html{
		background-color: #d3c704;
	}
	div.container{
		background-color: #d3c704;
		position: absolute;
	}
	.uno {
		position: relative;
		top: 65px;
		left: 150%;
		margin-right: 15px;
	}
	h4 {
		margin-top: -5%;
		text-align: center;
	}
	.caja {
		padding: 35px 30px 35px 33px;
		position: relative;
		width:250px;
		height: 250px;
		border:1px solid #000;
		border-radius: 10%;
		background-color: #fff;
	}
	.dos {
		position: relative;
		top: -35px;
		left: 100%;
	}
	.btn{
		margin: 0 20%;
	}
	img {
		position: relative;
		left: 37%;
		top: 10%;
	}
</style>
</head>
<body>

	<div class="container">
		<form action="ver.php" method="post">
		<img src="imagenes/logo2.png" class="img-responsive" alt="">
		<div class="btn-group dos">
			<buton class="btn btn-col dropdown-toggle" data-toggle="dropdown">
				<span class="glyphicon glyphicon-home"></span>
				<span class="caret"></span>
			</buton>
			<ul class="dropdown-menu" roles="menu">
				<li><a href="index.php">Inicio</a></li>									
				<li  class="divider"></li>
				<li><a href="www.google.com">Google</a></li>
			</ul>
		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 div-log">
				<div class="form-group uno">
					<form action="intranet.php">
					<div class="caja">
						<h4>Acceso a Intranet</h4>
						<div class="input-group">
							<span class="input-group-addon sr-only">Usuario</span>
							<input type="text" name="login" class="form-control" placeholder="Usuario">
						</div>
						<br>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon sr-only">Password</span>
								<input type="Password" name="password" class="form-control" placeholder="******">
							</div>
						</div>
						<input action="ver.php" type="submit" method="post" class="btn btn-primary" name="ingresar" id="ingresar" value="Enviar">
					</div>
					</form>
				</div>
			</div>
		</div>
		
		</form>
	</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>