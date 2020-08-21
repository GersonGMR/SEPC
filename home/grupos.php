<?php 
	session_start();
	$varsesion = $_SESSION['usr'];

	if($varsesion == null || $varsesion == '')
	{
		echo 'Usted no tiene permiso de ver este contenido.';
		die();
	}

		$link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"proyecto")
 ?>

<!doctype html>
<html lang="en">

<head>
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
	<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
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
						<a><img src="../images/uees.png" alt="UEES Logo" class="img-responsive logo"></a>
						</li>
						<li><a href="dash.php" class=""><i class="fas fa-tachometer-alt"></i><span>Inicio</span></a></li>		
						<li><a href="categorias.php" class=""><i class="fab fa-buromobelexperte"></i><span>Agregar Categorías</span></a></li>	
						<li><a href="jurados.php" class=""><i class="fas fa-gavel"></i> <span>Agregar Jurados</span></a></li>
						<li><a href="grupos.php" class="active"><i class="fas fa-users"></i> <span>Agregar Grupos</span></a></li>
						
						<li><a href="editable-Carrera.php" class=""><i class="fas fa-gavel"></i> <span>Administrar carreras</span></a></li>
						<li><a href="editable-table.php" class=""><i class="fas fa-gavel"></i> <span>Administrar jurados</span></a></li>
						<li><a href="editable-proyecto.php" class=""><i class="fas fa-gavel"></i> <span>Administrar proyectos</span></a></li>
						<li><a href="editable-integrante.php" class=""><i class="fas fa-gavel"></i> <span>Administrar integrantes</span></a></li>
						<li>
								<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-clipboard-check"></i> <span>Evaluacion Grupos</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages" class="collapse ">
									<ul class="nav">
										<li><a href="../jurado/innovacion_form.php"><i class="far fa-check-square"></i>Innovacion</a></li>									
										<li><a href="../jurado/evaluacion_form.php"><i class="far fa-check-square"></i>Presentación Escrita Documento Completo</a></li>
										<li><a href="../jurado/EvPresentacionOral_form.php"><i class="far fa-check-square"></i>Presentación Oral</a></li>
										<li><a href="../jurado/EvPoster_form.php"><i class="far fa-check-square"></i>Poster Científico</a></li>									
									</ul>
								</div>
						</li>
						<li>
								<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fas fa-chart-bar"></i> <span>Reportes Innovacion</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages2" class="collapse ">
									<ul class="nav">
										<li><a href="programacion.php"><i class="fas fa-chart-bar"></i>Programacion</a></li>									
										<li><a href="roboticaElectronica.php"><i class="fas fa-chart-bar"></i>Robótica yElectrónica</a></li>	
										<li><a href="multidisciplinaria.php"><i class="fas fa-chart-bar"></i>Multidisciplinaria</a></li>									
																		
									</ul>
								</div>
						</li>	
						<li>
								<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="fas fa-chart-bar"></i> <span>Reportes Métodos</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages3" class="collapse ">
									<ul class="nav">										
										<li><a href="presentacionEscrita.php"><i class="fas fa-chart-bar"></i>Presentación Escrita</a></li>	
										<li><a href="presentacionOral.php"><i class="fas fa-chart-bar"></i>Presentación Oral</a></li>	
										<li><a href="posterCientifico.php"><i class="fas fa-chart-bar"></i>Póster Científico</a></li>									
																		
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

				<div class="well form-horizontal" action="../funciones/registrogrupos.php " method="post"  id="contact_form">
					<fieldset>

						<!-- Form Name -->
						<legend class="text-center">Agregar Grupos</legend>


						<!-- Text input-->

						<div class="form-group">
							<a><label class="col-md-4 control-label">Nombre Proyecto</label></a>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
									<input id="nproyecto" name="nproyecto" placeholder="Ingresar Nombre Proyecto..." class="form-control"  type="text" required>
								</div>
							</div>
						</div>

						<!-- Text input-->

						<div class="form-group">
							<a><label class="col-md-4 control-label">Categoria a evaluar</label></a>
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<select id="nombrecat" name="nombrecat" class="form-control">	
											<option>Seleccione una categoría</option>
											<?php
										$res=mysqli_query($link,"select * from categorias");
										while($row=mysqli_fetch_array($res))
										{
										?>


											<option><?php echo $row ["nombre_categoria"];?></option>

										<?php	

										}					
										
										?>	
									</select>
								</div>
							</div>
						</div>

						<!-- Text input-->

						<div class="form-group">
							<a><label class="col-md-4 control-label">Integrante 1</label></a>    
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="n1" name="n1" placeholder="Integrante 1..." class="form-control"  type="text"  required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<a><label class="col-md-4 control-label">Integrante 2</label></a>    
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input  id="n2" name="n2" placeholder="Integrante 2..." class="form-control"  type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<a><label class="col-md-4 control-label">Integrante 3</label></a>    
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="n3" name="n3" placeholder="Integrante 3..." class="form-control"  type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<a><label class="col-md-4 control-label">Integrante 4</label></a>   
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="n4" name="n4" placeholder="Integrante 4..." class="form-control"  type="text">
								</div>
							</div>
						</div>	

							<div class="form-group">
							<a><label class="col-md-4 control-label">Integrante 5</label></a>   
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="n5" name="n5" placeholder="Integrante 5..." class="form-control"  type="text">
								</div>
							</div>
						</div>							
						<!-- Agregar Juez 1 -->
						<div class="form-group">
							<a><label class="col-md-4 control-label">Usuario del Juez</label></a>   
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<select id="usr" name="usr" class="form-control">	
											<option>Seleccione al Juez 1</option>
										<?php
										$res=mysqli_query($link,"SELECT * from jueces;");
										while($row=mysqli_fetch_array($res))
										{
										?>

											<option><?php echo $row ["usr"];?></option>

										<?php	

										}					
										
										?>							
									</select>
								</div>
							</div>
						</div>

						<!-- Agregar Juez 2 -->
						<div class="form-group">
							<a><label class="col-md-4 control-label">Usuario del Juez</label></a>   
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<select id="usr2" name="usr2" class="form-control">	
											<option value="0">Seleccione al Juez 2</option>
										<?php
										$res=mysqli_query($link,"SELECT * from jueces;");
										while($row=mysqli_fetch_array($res))
										{
										?>

											<option><?php echo $row ["usr"];?></option>
											

										<?php	

										}					
										
										?>							
									</select>
								</div>
							</div>
						</div>		

						<!-- Agregar Juez 2 -->
						<div class="form-group">
							<a><label class="col-md-4 control-label">Usuario del Juez</label></a>   
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<select id="usr3" name="usr3" class="form-control">	
											<option value="0">Seleccione al Juez 3</option>
										<?php
										$res=mysqli_query($link,"SELECT * from jueces;");
										while($row=mysqli_fetch_array($res))
										{
										?>

											<option><?php echo $row ["usr"];?></option>
											

										<?php	

										}					
										
										?>							
									</select>
								</div>
							</div>
						</div>													
						

						<!-- Success message -->
						<div class="alert alert-success" role="alert" id="success_message" align="center">Mucha suerte  en la evaluación de su grupo. <i class="glyphicon glyphicon-thumbs-up"></i></div>

						<!-- Button -->
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-4" align="center">
								<button id="registrarNuevo" type="submit" class="btn btn-primary btn-lg" >Enviar &nbsp<span class="glyphicon glyphicon-send"></span></button>
							</div>
						</div>

					</fieldset>
				</div>
			</div>
		</div><!-- /.container -->


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
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/alertifyjs/alertify.js"></script>	
	
</body>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nproyecto').val()==""){
				alertify.error("Debes agregar el nombre del proyecto");
				return false;
			}
			else if($('#nombrecat').val()==""){
				alertify.error("Elija una categoria");
				return false;
			}
			else if($('#n1').val()==""){
				alertify.error("Falta el nombre de un integrante");
				return false;
			}
		
			else if($('#usr').val()==""){
				alertify.error("Falta el usuario del juez");
				return false;
			}

			cadena="&nproyecto=" + $('#nproyecto').val() +
					"&nombrecat=" + $('#nombrecat').val()+
					"&n1=" + $('#n1').val()+
					"&n2=" + $('#n2').val()+
					"&n3=" + $('#n3').val()+
					"&n4=" + $('#n4').val()+
					"&n5=" + $('#n5').val()+
					"&usr=" + $('#usr').val()+
					"&usr2=" + $('#usr2').val()+
					"&usr3=" + $('#usr3').val();

					$.ajax({
						type:"POST",
						url:"../funciones/registrogrupos.php",
						data:cadena,
						success:function(r){
							if(r==1){
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>