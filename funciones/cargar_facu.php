<?php
include ('../home/editable-Carrera.php');
include_once 'conexion.php';


$varsesion = $_SESSION['usr'];

$carrera = $_POST['carrera'];
$facultad = $_POST['facultad'];
$id = $_POST['id'];

$query1="SELECT nombre_carrera FROM carreras WHERE id_carrera='$id'";
   $result1=mysqli_query($con,$query1);
   $old=mysqli_fetch_array($result1);
   $old1=$old['nombre_carrera'];

$query2="SELECT carreras.id_facultad, facultades.nombre_facultad from carreras
INNER JOIN facultades 
ON carreras.id_facultad=facultades.id_facultad
WHERE carreras.id_carrera=$id";
   $result2=mysqli_query($con,$query2);
   $old3=mysqli_fetch_array($result2);
   $old2=$old3['nombre_facultad'];

$query3="SELECT nombre_facultad FROM facultades WHERE id_facultad='$facultad'";
   $result3=mysqli_query($con,$query3);
   $old4=mysqli_fetch_array($result3);
   $old3=$old4['nombre_facultad'];

if($old1==$carrera){

} else {
$procedimiento = "CALL registrarAuditoria('$varsesion',2,1,'$old1','$carrera','$id')";
    $result4= mysqli_query($con,$procedimiento);
}

if($old2==$old3){

} else {
$procedimiento = "CALL registrarAuditoria('$varsesion',2,1,'$old2','$old3','$id')";
    $result4= mysqli_query($con,$procedimiento);
}


$update = "UPDATE carreras SET nombre_carrera = '$carrera',  id_facultad = '$facultad' WHERE id_carrera = '$id'";
return $result= mysqli_query($con,$update);

?>