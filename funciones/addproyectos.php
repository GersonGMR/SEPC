<?php 

include_once 'conexion.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$carrera = $_POST['carrera'];
$certamen = $_POST['certamen'];
$total = '0';
$estado = '1';
$userSesion = $_POST['usuarioAct'];

$insert = "INSERT INTO proyectos (Id_Usuarios,total,nombre_Proyecto,id_carrera,id_certamen,estado) 
            VALUES ('$usuario','$total','$nombre','$carrera','$certamen','$estado')";


 echo $result= mysqli_multi_query($con,$insert);
 $procedimiento = "CALL registrarAuditoria('$userSesion',1,6)";
 $result2= mysqli_query($con,$procedimiento);
 ?>

