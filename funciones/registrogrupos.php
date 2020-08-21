<?php 

include_once 'conexion.php';

$nproyecto = $_POST['nproyecto'];
$nombrecat = $_POST['nombrecat'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$usr = $_POST['usr'];
$usr2 = $_POST['usr2'];
$usr3 = $_POST['usr3'];

if($usr3==0){
$insert = "INSERT INTO grupos (nombre_proyecto, categoria, n1, n2, n3, n4, n5, usr, usr2, usr3) VALUES ('$nproyecto','$nombrecat','$n1','$n2' ,'$n3' ,'$n4' ,'$n5' ,'$usr','$usr2','');";

echo $result=mysqli_query($con,$insert);
}


else{
    $insert = "INSERT INTO grupos (nombre_proyecto, categoria, n1, n2, n3, n4, n5, usr, usr2, usr3) VALUES ('$nproyecto','$nombrecat','$n1','$n2' ,'$n3' ,'$n4' ,'$n5' ,'$usr','$usr2','$usr3');";
   
    echo $result=mysqli_query($con,$insert);
}
?>