<?php 
include ('../home/editable-integrante.php');
include_once 'conexion.php';
$varsesion = $_SESSION['usr'];
$nombre = $_POST['nombre'];
$cif = $_POST['cif'];
$proyecto = $_POST['proyecto'];
$carrera = $_POST['carrera'];
$idintegrante = $_POST['idintegrante'];
$userSesion = $_POST['usuarioAct'];

$query1="SELECT nombre_integrante FROM integrante WHERE id_Integrante='$idintegrante'";
   $result1=mysqli_query($con,$query1);
   $old=mysqli_fetch_array($result1);
   $old1=$old['nombre_integrante'];

$query2="SELECT CIF FROM integrante WHERE id_Integrante='$idintegrante'";
   $result2=mysqli_query($con,$query2);
   $old3=mysqli_fetch_array($result2);
   $old2=$old3['CIF'];

$query3="SELECT integrante.id_Proyecto, proyectos.nombre_Proyecto from integrante
   INNER JOIN proyectos 
   ON integrante.id_Proyecto=proyectos.id_Proyecto
   WHERE integrante.id_Integrante=$idintegrante ";
      $result3=mysqli_query($con,$query3);
      $old4=mysqli_fetch_array($result3);
      $old3=$old4['nombre_Proyecto'];

$query4="SELECT nombre_Proyecto FROM Proyectos WHERE id_Proyecto='$proyecto'";
      $result4=mysqli_query($con,$query4);
      $old5=mysqli_fetch_array($result4);
      $old4=$old5['nombre_Proyecto'];

$query5="SELECT integrante.id_carrera, carreras.nombre_carrera from integrante
      INNER JOIN carreras 
      ON integrante.id_carrera=carreras.id_carrera
      WHERE integrante.id_Integrante=$idintegrante ";
         $result5=mysqli_query($con,$query5);
         $old6=mysqli_fetch_array($result5);
         $old5=$old6['nombre_carrera']; 

 $query6="SELECT nombre_carrera FROM carreras WHERE id_carrera='$carrera'";
         $result6=mysqli_query($con,$query6);
         $old7=mysqli_fetch_array($result6);
         $old6=$old7['nombre_carrera'];
   

         if($old1==$nombre){

        } else {
        $procedimiento = "CALL registrarAuditoria('$varsesion',2,5,'$old1','$nombre','$idintegrante')";
            $result5= mysqli_query($con,$procedimiento);
        }
    
        if($old2==$cif){
    
        } else {
        $procedimiento = "CALL registrarAuditoria('$varsesion',2,5,'$old2','$cif','$idintegrante')";
            $result6= mysqli_query($con,$procedimiento);
        }
    
    
        if($old3==$old4){
    
        } else {
        $procedimiento = "CALL registrarAuditoria('$varsesion',2,5,'$old3','$old4','$idintegrante')";
            $result7= mysqli_query($con,$procedimiento);
        }
    
        if($old5==$old6){
    
        } else {
        $procedimiento = "CALL registrarAuditoria('$varsesion',2,5,'$old5','$old6','$idintegrante')";
            $result8= mysqli_query($con,$procedimiento);
        }        

$update = "UPDATE integrante SET nombre_integrante = '$nombre',  id_carrera = '$carrera', cif = '$cif', id_Proyecto = '$proyecto' WHERE id_Integrante = '$idintegrante'";



 echo $result= mysqli_multi_query($con,$update);


 ?>

