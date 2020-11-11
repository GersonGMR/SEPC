
<?php 
  session_start();
  $varsesion = $_SESSION['usr'];

  if($varsesion == null || $varsesion == '')
  {
    echo 'Usted no tiene permiso de ver este contenido.';
    die();
  }

  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"proyecto");



 /* $consulta = mysqli_query($link,"SELECT * FROM usuarios WHERE usr = Nombre");
  $tipo = var_dump($consulta);
  echo $tipo;
 try {

   while($c = mysqli_fetch_row($consulta)){

     echo $c[1];

   }

 }catch(Exception $e){

   //echo 'Exception capturada', $e->getMessage(), "\n";

 }*/

 /*$consulta = "SELECT * FROM usuarios WHERE usr = Nombre";
         if ($respuesta= mysqli_query($link, $consulta)) {
            while ($fila = mysqli_fetch_row($respuesta)) {
               echo $respuesta["Nombre"];
            }
         mysqli_free_result($resultado);
         } else {
         return false;
        }*/



 ?>

