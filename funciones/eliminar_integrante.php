<?php
include_once 'conexion.php';
session_start();
$varsesion = $_SESSION['usr'];

if (isset($_GET['id'])) { 

        //Se almacena en una variable el id del registro a eliminar y el estado = 1.
        $identi = $_GET["id"];
        $state = 0;
        //Preparar la consulta
        $consulta1 = "UPDATE integrante SET estado=$state WHERE id_Integrante=$identi";
          //Ejecutar la consulta
        $resultado = mysqli_query($con,$consulta1);
        //auditoría
        $procedimiento = "CALL registrarAuditoria('$varsesion',3,5)";
        $result2= mysqli_query($con,$procedimiento);

        
        //redirigir nuevamente a la página para ver el resultado
        
       echo 'Eliminado exitosamente !';

} 



