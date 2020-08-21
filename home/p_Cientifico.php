<?php 
	session_start();
	$varsesion = $_SESSION['usr'];

	if($varsesion == null || $varsesion == '')
	{
		echo 'Usted no tiene permiso de ver este contenido.';
		die();
	}
 ?>

<!doctype html>
<html lang="en">

<head>
<style type="text/css">
			#chart-container {
				width: 640px;
				height: auto;
			}
		</style>
	<title>SEPC UEES Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/uees.png">
</head>

<body>
<!-- WRAPPER -->
	<div id="wrapper">    
		<!-- NAVBAR -->    
		<nav class="navbar navbar-default navbar-fixed-top">			
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
				</div>      
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>            
					</div>          
        </form>    
        <form class="navbar-form navbar-left">
          <h4><span style="font-weight:bold">SISTEMA DE EVALUACION DE PROYECTOS DE CATEDRA FIUESS</span></h4>

        </form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
					
					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user" ></i><span>Bienvenido <?php echo $_SESSION['usr'];  ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
							
								<li><a href="../funciones/salir.php""><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
						<a><img src="http://www.uees.edu.sv/wp-content/uploads/2017/06/logo140_37anos.png" alt="UEES Logo" class="img-responsive logo"></a>
						</li>
						<li><a href="dash.php" class="active"><i class="fas fa-tachometer-alt"></i><span>Inicio</span></a></li>		
						<li><a href="categorias.php" class=""><i class="fab fa-buromobelexperte"></i><span>Agregar Categorías</span></a></li>	
						<li><a href="jurados.php" class=""><i class="fas fa-gavel"></i> <span>Agregar Jurados</span></a></li>
						<li><a href="grupos.php" class=""><i class="fas fa-users"></i> <span>Agregar Grupos</span></a></li>
						<li>
								<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-clipboard-check"></i> <span>Evaluacion Grupos</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages" class="collapse ">
									<ul class="nav">
										<li><a href="../jurado/innovacion_form.php"><i class="far fa-check-square"></i>Innovacion</a></li>									
										<li><a href="../jurado/evaluacion_form.php"><i class="far fa-check-square"></i>Presentación Escrita Documento Completo</a></li>
										<li><a href="../jurado/EvPoster_form.php"><i class="far fa-check-square"></i>Presentación Oral</a></li>
										<li><a href="../jurado/EvPresentacionOral_form.php"><i class="far fa-check-square"></i>Poster Científico</a></li>									
									</ul>
								</div>
						</li>
						<li>
								<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fas fa-chart-bar"></i> <span>Reportes</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages2" class="collapse ">
									<ul class="nav">
										<li><a href="programacion.php"><i class="fas fa-chart-bar"></i>Programacion</a></li>	
										<li><a href="presentacionEscrita.php"><i class="fas fa-chart-bar"></i>Presentación Escrita Documento Completo</a></li>	
										<li><a href="presentacionOral.php"><i class="fas fa-chart-bar"></i>Presentación Oral</a></li>	
										<li><a href="posterCientifico.php"><i class="fas fa-chart-bar"></i>Poster Científico</a></li>									
																		
									</ul>
								</div>
						</li>					
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<br><br>
			<!-- MAIN CONTENT -->
			<div class="container">
				<h2><font color=blue>Bienvenidos al Sistema de Evaluación de Proyectos de Cátedra de la FIUESS</font></h2>
				

				<h3><font color=green>Jurado</font></h3>
				<h4>Paso 1: Haga click en el menu a su izquierda sobre la pestaña de "Evaluación Grupos"</h4>
				<h4>Paso 2: Elija dentro de las opciones el formulario a evaluar</h4>
			</div>


			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2018 <a href="https://www.themeineed.com" target="_blank"></a>. All Rights Reserved.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="assets/vendor/chartist/js/chartist.min.js"></script>
		<script src="assets/scripts/klorofil-common.js"></script>
	
</body>

</html>
