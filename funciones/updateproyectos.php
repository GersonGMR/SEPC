<?php 
include ('../home/editable-proyecto.php');
include_once 'conexion.php';
$varsesion = $_SESSION['usr'];
$nombre1 = $_POST['nombre'];
$usuario1 = $_POST['usuario'];
$carrera1 = $_POST['carrera'];
$certamen1 = $_POST['certamen'];
$idproyecto1 = $_POST['idproyecto'];
$userSesion1 = $_POST['usuarioAct'];

$query1="SELECT nombre_Proyecto FROM proyectos WHERE id_Proyecto='$idproyecto1'";
   $result1=mysqli_query($con,$query1);
   $old=mysqli_fetch_array($result1);
   $old1=$old['nombre_Proyecto'];

$query2="SELECT proyectos.Id_Usuarios, usuarios.Nombre from proyectos
   INNER JOIN usuarios 
   ON proyectos.Id_Usuarios=usuarios.Id_Usuarios
   WHERE proyectos.id_Proyecto=$idproyecto1";
      $result2=mysqli_query($con,$query2);
      $old3=mysqli_fetch_array($result2);
      $old2=$old3['Nombre'];

$query3="SELECT Nombre FROM usuarios WHERE Id_Usuarios='$usuario1'";
      $result3=mysqli_query($con,$query3);
      $old4=mysqli_fetch_array($result3);
      $old3=$old4['Nombre'];     

$query4="SELECT proyectos.id_carrera, carreras.nombre_carrera from proyectos
      INNER JOIN carreras 
      ON proyectos.id_carrera=carreras.id_carrera
      WHERE proyectos.id_Proyecto=$idproyecto1";
         $result4=mysqli_query($con,$query4);
         $old5=mysqli_fetch_array($result4);
         $old4=$old5['nombre_carrera'];

$query5="SELECT nombre_carrera FROM carreras WHERE id_carrera='$carrera1'";
      $result5=mysqli_query($con,$query5);
      $old6=mysqli_fetch_array($result5);
      $old5=$old6['nombre_carrera']; 


$query6="SELECT proyectos.id_certamen, certamen.fecha_certamen from proyectos
         INNER JOIN certamen 
         ON proyectos.id_certamen=certamen.id_certamen
         WHERE proyectos.id_Proyecto=$idproyecto1";
            $result6=mysqli_query($con,$query6);
            $old7=mysqli_fetch_array($result6);
            $old6=$old7['fecha_certamen'];

$query7="SELECT fecha_certamen FROM certamen WHERE id_certamen='$certamen1'";
      $result7=mysqli_query($con,$query7);
      $old8=mysqli_fetch_array($result7);
      $old7=$old8['fecha_certamen']; 

            if($old1==$nombre1){

            } else {
            $procedimiento = "CALL registrarAuditoria('$varsesion',2,6,'$old1','$nombre1','$idproyecto1')";
                $result10= mysqli_query($con,$procedimiento);
            }
        
            if($old2==$old3){
        
            } else {
            $procedimiento = "CALL registrarAuditoria('$varsesion',2,6,'$old2','$old3','$idproyecto1')";
                $result9= mysqli_query($con,$procedimiento);
            }
        
        
            if($old4==$old5){
        
            } else {
            $procedimiento = "CALL registrarAuditoria('$varsesion',2,6,'$old4','$old5','$idproyecto1')";
                $result7= mysqli_query($con,$procedimiento);
            }
        
            if($old6==$old7){
        
            } else {
            $procedimiento = "CALL registrarAuditoria('$varsesion',2,6,'$old6','$old7','$idproyecto1')";
                $result8= mysqli_query($con,$procedimiento);
            }





$update = "UPDATE proyectos SET nombre_Proyecto = '$nombre1',  id_carrera = '$carrera1', Id_Usuarios = '$usuario1', id_certamen = '$certamen1' WHERE id_Proyecto = '$idproyecto1'";

 echo $result= mysqli_multi_query($con,$update);








 ?>