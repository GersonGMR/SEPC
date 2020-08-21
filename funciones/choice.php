<?php 
	session_start();
	$varsesion = $_SESSION['usr'];

	if($varsesion == null || $varsesion == '')
	{

		echo 'Usted no tiene permiso de ver este contenido.';
		die();
	}


 ?>
 <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/theme.css" type="text/css">
</head>

<body class="bg-secondary" style="	text-shadow: 0px 0px 4px black;	box-shadow: 0px 0px 4px  black, 0px 0px 4px  black;">
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container"> <a class="navbar-brand" href="#">Bienvenido <?php echo $_SESSION['usr'] ?></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn navbar-btn ml-2 text-white btn-light" id="salir" href="salir.php">Salir</a> </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h1 class=""><b>Escoja sus intereses:</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-success" style="" >
    <div class="container">
      <div class="row">
        <div class="col-md-2" style=""><img class="img-fluid d-block p-0 border" src="img/accion.png" style="">
          <h1 class="text-center">Accion</h1>
        </div>
        <div class="col-md-2" style=""><img class="img-fluid d-block border" src="img/aventura.png" style="">
          <h1 class="">Aventura</h1>
        </div>
        <div class="col-md-2" style=""><img class="img-fluid d-block border" src="img/drama.png">
          <h1 class="text-center">Drama</h1>
        </div>
        <div class="col-md-2" style=""><img class="img-fluid d-block border" src="img/deport.png">
          <h1 class="">Deportes</h1>
        </div>
        <div class="col-md-2" style=""><img class="img-fluid d-block border" src="img/rol.png">
          <h1 class="text-center" style="">Rol</h1>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

</body>
</html>