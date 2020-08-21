<?php 

include_once 'conexion.php';


$ncategoria = $_POST['ncat'];
$userSesion = $_POST['usuarioAct'];



$insert = "INSERT INTO categorias (nombre_categoria) VALUES ('$ncategoria');";

   echo $result= mysqli_query($con,$insert);
    $procedimiento = "CALL registrarAuditoria('$userSesion',1,2)";
    $result2= mysqli_query($con,$procedimiento);


 ?>
