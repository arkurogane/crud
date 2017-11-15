
<html>
<head>
  <title>Evaluacion</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <style type="text/css">
    .sol{
    width: 60px;
  }
  .luna{
    width: 300px;
  }
  </style>
</head>
<body>
	<?php include "php/navbar.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>VER ENTRADAS</h2>
        <!-- Button trigger modal -->
        <div>
          <br>
          <label>codigo criterio</label> &nbsp;<input type="text" name="codigo" id="criterio" class="sol"> <label>Considera que ESA es un aporte para su desarrollo profesional?</label>
        </div>
        <div>
          <br>
          <label>codigo seccion</label> <input type="text" name="codigo" id="seccion" class="sol"> <input type="text" name="codigo" id="nom_seccion" class="luna">
        </div>
        <br><br>
        <!--<a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
        <br><br>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Agregar</h4>
              </div>
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
                  <div class="form-group">
                    <label for="nota">Nota</label>
                    <input type="text" class="form-control" name="nota" >
                  </div>
                  <button type="submit" class="btn btn-default">Agregar</button>
                </form>
              </div>

            </div>
          </div>
        </div>-->


        <?php include "php/tabla.php"; ?>
      </div>
    </div>
  </div>

  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>