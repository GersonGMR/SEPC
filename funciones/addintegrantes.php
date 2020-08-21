<?php 

include_once 'conexion.php';

$nombre = $_POST['nombre'];
$cif = $_POST['cif'];
$proyecto = $_POST['proyecto'];
$carrera = $_POST['carrera'];
$estado = '1';
$userSesion = $_POST['usuarioAct'];


$insert = "INSERT INTO integrante (nombre_integrante,CIF,id_Proyecto,id_carrera,estado) 
            VALUES ('$nombre','$cif','$proyecto','$carrera','$estado')";


 echo $result= mysqli_multi_query($con,$insert);
 $procedimiento = "CALL registrarAuditoria('$userSesion',1,5)";
 $result2= mysqli_query($con,$procedimiento);

 ?>

