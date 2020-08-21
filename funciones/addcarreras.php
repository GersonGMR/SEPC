<?php 

include_once 'conexion.php';

$nombre = $_POST['nombre'];
$facultad = $_POST['facultad'];
$estado = '1';
$userSesion = $_POST["usuarioAct"];

$insert = "INSERT INTO carreras (id_facultad,nombre_carrera,estado) 
            VALUES ('$facultad','$nombre','$estado')";


 echo $result= mysqli_multi_query($con,$insert);
$procedimiento = "CALL registrarAuditoria('$userSesion',1,1)";
        $result2= mysqli_query($con,$procedimiento);
 ?>

