<?php
$usuario = $_POST['usr'];
$clave = $_POST['psw'];

session_start();
$_SESSION ['usr'] = $usuario;

//Se conecta a la base
$conexion= mysqli_connect("localhost", "root", "", "proyecto");
$consulta="SELECT * from adm where usr = '$usuario' and pass= '$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);

if($filas>0)
{
echo "si";
}

else
{

  echo "no";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>