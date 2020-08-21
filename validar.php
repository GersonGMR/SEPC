
<?php  

	$usuario = $_POST['user'];
	$clave = $_POST['psw'];


	//Se conecta a la base
	$conexion = include("conexion.php");

	$consulta = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contra = '$clave'";
	$resultado = mysqli_query($conexion, $consulta);
	$filas = mysqli_num_rows($resultado);
	$user = mysqli_fetch_array($resultado);


	//Verifica si el usuario existe
	if($filas != 0)
	{
		$consulta2 = "SELECT Id_TipoUsu FROM usuarios WHERE Usuario = '$usuario' AND Contra = '$clave'";
		$resultado2 = mysqli_query($conexion, $consulta2);
		$TipoUsu = mysqli_fetch_array($resultado2);

		if($TipoUsu[0] == 1)
		{
			session_start();
			$_SESSION ['usr'] = $user[3];
			header("location:home/dash.php");
		}
		else
		{
			$consulta3 = "SELECT Id_Categoria FROM usuarios WHERE Usuario = '$usuario' AND Contra = '$clave'";
			$resultado3 = mysqli_query($conexion, $consulta3);
			$cat = mysqli_fetch_array($resultado3);
				
			if($cat[0] == 1)
			{
				session_start();
				$_SESSION ['usr'] = $user[3];
				header("location:home/jurado_innovacion.php");	
			}
			else if($cat[0] == 2)
			{
				session_start();
				$_SESSION ['usr'] = $user[3];
				header("location:home/jurado_innovacion.php");	
			}
			else if($cat[0] == 3)
			{
				session_start();
				$_SESSION ['usr'] = $user[3];
				header("location:home/jurado_innovacion.php");	
			}
			else if($cat[0] == 4)
			{
				session_start();
				$_SESSION ['usr'] = $user[3];
				header("location:home/jurado_metodos.php");	
			}
		} 
	}
	else
	{
		echo "El usuario no existe";
			
	}

	//Cierra la conexion
	mysqli_close($conexion);

?>


