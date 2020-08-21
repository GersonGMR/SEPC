<?php 

include_once 'conexion.php';

$user = $_POST['usr'];
$nombre = $_POST['name'];
$pass = $_POST['pass'];



$insert = "INSERT INTO users (usr,  nombre, pass,  nombre_categoria, CIF) VALUES ('$user','$nombre','$pass','0', null)";


 $result= mysqli_query($con,$insert);

 if($result=1)
{

echo "DATOS ENVIADOS CORRECTAMENTE";

}else{
	echo "DATOS NO ENVIADOS";
}

 ?>
<br><br>
<input type="button" value="Regresar" onclick="window.location.href='index.php'" />