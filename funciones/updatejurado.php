
<?php 
include ('../home/editable-table.php');
include_once 'conexion.php';

$varsesion = $_SESSION['usr'];

$nombre1 = $_POST['nombre'];
$apellido1 = $_POST['apellido'];
$user1 = $_POST['user'];
$categoria1 = $_POST['nombrecat'];
$idjurados1 = $_POST['id'];
$userSesion1 = $_POST['usuarioAct'];


$query1="SELECT Nombre FROM usuarios WHERE Id_Usuarios='$idjurados1'";
   $result1=mysqli_query($con,$query1);
   $old=mysqli_fetch_array($result1);
   $old1=$old['Nombre'];

$query2="SELECT Apellido FROM usuarios WHERE Id_Usuarios='$idjurados1'";
   $result2=mysqli_query($con,$query2);
   $old3=mysqli_fetch_array($result2);
   $old2=$old3['Apellido'];

$query3="SELECT Usuario FROM usuarios WHERE Id_Usuarios='$idjurados1'";
   $result3=mysqli_query($con,$query3);
   $old4=mysqli_fetch_array($result3);
   $old5=$old4['Usuario'];

$query4="SELECT usuarios.Id_Categoria, categorias.Nombre_Categoria from usuarios
   INNER JOIN categorias 
   ON usuarios.Id_Categoria=categorias.Id_Categoria
   WHERE usuarios.Id_Usuarios=$idjurados1";
      $result4=mysqli_query($con,$query4);
      $old6=mysqli_fetch_array($result4);
      $old7=$old6['Nombre_Categoria'];

   $query5="SELECT Nombre_Categoria FROM categorias WHERE Id_Categoria='$categoria1'";
   $result5=mysqli_query($con,$query5);
   $old8=mysqli_fetch_array($result5);
   $old9=$old8['Nombre_Categoria'];



      if($old1==$nombre1){

    } else {
    $procedimiento = "CALL registrarAuditoria('$varsesion',2,8,'$old1','$nombre1','$idjurados1')";
        $result5= mysqli_query($con,$procedimiento);
    }

    if($old2==$apellido1){

    } else {
    $procedimiento = "CALL registrarAuditoria('$varsesion',2,8,'$old2','$apellido1','$idjurados1')";
        $result6= mysqli_query($con,$procedimiento);
    }


    if($old5==$user1){

    } else {
    $procedimiento = "CALL registrarAuditoria('$varsesion',2,8,'$old5','$user1','$idjurados1')";
        $result7= mysqli_query($con,$procedimiento);
    }

    if($old7==$old9){

    } else {
    $procedimiento = "CALL registrarAuditoria('$varsesion',2,8,'$old7','$old9','$idjurados1')";
        $result8= mysqli_query($con,$procedimiento);
    }




$update = "UPDATE usuarios SET Nombre = '$nombre1',  Apellido = '$apellido1', Usuario = '$user1', Id_Categoria = '$categoria1' WHERE Id_Usuarios = '$idjurados1'";

return $result= mysqli_multi_query($con,$update);





?>