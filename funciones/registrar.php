<?php 

include_once 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$categoria = $_POST['nombrecat'];
$tipousuario = '2';
$userSesion = $_POST['usuarioAct'];


$insert = "INSERT INTO usuarios (Nombre,Apellido,Usuario,Contra,Id_Categoria,Id_TipoUsu) 
            VALUES ('$nombre','$apellido','$user','$pass','$categoria','$tipousuario')";

echo $result= mysqli_multi_query($con,$insert);

$procedimiento = "CALL registrarAuditoria('$userSesion',1,8)";
$result2= mysqli_query($con,$procedimiento);


?>









