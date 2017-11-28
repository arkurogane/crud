
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
  <?php 
  session_start();
  if (!isset($_SESSION["usuario"])) {
      //header("Location:login.php");
  }else{
    //header("Location:ver.php");
  }
  ?>
  
	<?php include "php/navbar2.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Notas</h2>
        <!-- Button trigger modal -->
        <div>
          <br>
          <!--<form action="ver.php" method="post">
          <label>codigo pregunta</label> &nbsp;<input type="text" name="pregunta" id="criterio" class="sol"> <label>Considera que la Empresa Simulada en el Aula es un aporte para su desarrollo profesional?</label>
        </div>
        <div>
          <br>
          <label>codigo seccion</label> <input type="text" name="codigo" id="secion" class="sol"> <input type="text" name="sec" id="nom_seccion" class="luna"> 
          <button action="ver.php" class="btn btn-primary">filtrar</button>
        </div>
      </form>-->
        <br><br>
        <?php include "php/tabla.php"; ?>
      </div>
    </div>
  </div>

  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>