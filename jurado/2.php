
<?php 
  session_start();
  $varsesion = $_SESSION['usr'];
 
  if($varsesion == null || $varsesion == '')
  {
    echo 'Usted no tiene permiso de ver este contenido.';
    die();
  } 
//Se busca la categoria correspondiente y se almacena en una variable
  
   include("conexion.php");
   $link=conecta(); 
$res=mysqli_query($link,"SELECT * from jueces where usr = '$varsesion'");

while($row=mysqli_fetch_array($res))
  {
    


     $cat = $row["nombre_categoria"];


 

  }         



        

 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario de Tecnologia</title>
<style type="text/css">
#form1 div table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
 <body>
 	 <div align="center" class="container" id="advanced-search-form">

 <?php 



$nombre_proyecto=$_POST["nombre_proyecto"];
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$s3=$_POST["s3"];
$s4=$_POST["s4"];
$s5=$_POST["s5"];
$s6=$_POST["s6"];
$total=$s1+$s2+$s3+$s4+$s5+$s6;
//echo $total;
//echo $id_grupo;
//echo $usr;
//echo $id_categoria;




$sql="UPDATE grupos SET total_cat1 = '$total' WHERE nombre_proyecto ='$nombre_proyecto';";

$result= mysqli_query($link,$sql);



if($result>0)
{

echo "DATOS ENVIADOS CORRECTAMENTE";

}else{
	echo "DATOS NO ENVIADOS";
}

 ?>
<br><br>
<input type="button" value="Regresar" onclick="window.location.href='../home/tecnologia.php'" />

</div>
 </body>
 
