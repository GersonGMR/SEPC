
<?php 
  session_start();
  $varsesion = $_SESSION['usr'];
  if($varsesion == null || $varsesion == '')
  {
    echo 'Usted no tiene permiso de ver este contenido.';
    die();
  }

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
<title>Documento sin título</title>
<style type="text/css">
#form1 div table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
 <body>
 	 <div align="center" class="container" id="advanced-search-form">
 	<form action="">
 <?php 

$nombre_proyecto=$_POST["nombre_proyecto"];
$res=mysqli_query($link,"SELECT total_cat3 from grupos where nombre_proyecto = '$nombre_proyecto'");

	while($row=mysqli_fetch_array($res))
	{
     $subtotal = $row["total_cat3"];
  }   
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$s3=$_POST["s3"];
$s4=$_POST["s4"];
$s5=$_POST["s5"];
$s6=$_POST["s6"];
$s7=$_POST["s7"];
$s8=$_POST["s8"];
$s9=$_POST["s9"];
$s10=$_POST["s10"];
$total=$subtotal+$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10;
//echo $total;




$sql="UPDATE grupos SET total_cat3 = '$total' WHERE nombre_proyecto ='$nombre_proyecto';";

$result= mysqli_query($link,$sql);

if($result>0)
{

echo "DATOS ENVIADOS CORRECTAMENTE";

}else{
	echo "DATOS NO ENVIADOS";
}

 ?>
<br><br>
<input type="button" value="Regresar" onclick="window.location.href='../home/jurado_metodos.php'" />

</div>
 </body>
 
