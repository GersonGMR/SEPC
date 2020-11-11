
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
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#form1 table tr td p {
	font-family: Arial, Helvetica, sans-serif;
}
#form1 table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
#form1 table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="innovacion.php">
  <table width="878" border="1" align="center">
    <tr>
      <td height="54" colspan="2" align="center" valign="top"><p align="left"><img src="../images/uees.png" width="81" height="70" /> 
        <h1  align="center"><strong>CERTAMEN DE INVESTIGACION E INNOVACION EN CATEDRA</strong><br />
        </h1>
    </tr>
    
    <tr>
      <td height="40" colspan="2"><strong>Indicaciones: </strong>Considerando la escala de evaluacion<strong>: 5 la mas alta y 1 la mas baja</strong>; seleccione la nota asignada y posterior a esto, deje su observacion si es necesario...</td>
    </tr>
    <tr>
        <td height="46" colspan="4">Jurado: <?php  echo $_SESSION['usr']  ?> 
        </td>
      </tr>
      <tr>
        <td height="46" colspan="4">Categoria:
            <?php  
            try {
            
              $mysqli = new mysqli("localhost","root","","proyecto");

              // Check connection
              if ($mysqli -> connect_errno) {
              echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
              exit();
              }

              //Consulta para traer el nombre de la categoria de la tabla categorias.
              $consulta = "SELECT categorias.Nombre_Categoria as categorias, usuarios.Usuario from usuarios INNER JOIN 
              categorias ON usuarios.Id_Categoria = categorias.Id_Categoria where Usuario =". "'".$varsesion."'";

              $respuesta = mysqli_query($mysqli , $consulta);

              //if($respuesta){ echo "true"; } else{ echo "false";}

              foreach($respuesta as $mos){
                echo $mos["categorias"] . "<br>";
              }
              
              /*while ($mostrar = mysqli_fetch_row($respuesta)){
                
                echo implode(" ",$mostrar);
              } */
              

            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
           

                 

          ?>
        </td>

    </tr>
    <tr>
      <td height="40" colspan="4"><strong>Titulo de la investigacion: 
         <select name="nombre_proyecto" id="nombre_proyecto">
          <option>Seleccione el nombre del proyecto</option>
          <?php  
          $res=mysqli_query($link,"SELECT * from grupos where (usr = '$varsesion') or (usr2 = '$varsesion') or (usr3 = '$varsesion')");
                    while($row=mysqli_fetch_array($res))
                    {
                    ?>
                      <option><?php echo $row ["nombre_proyecto"];?></option>

                    <?php 

                    }         
                    
                    ?>  
        </select></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="878" border="1" align="center">
    <tr>
      <td height="61" colspan="2" align="center"><strong>Criterios a evaluar:</strong></td>
      <td height="61" align="center"><strong>Valor:</strong></td>
      <td width="302" align="center"><strong>Observaciones </strong></td>
    </tr>
    <tr>
      <td width="76" height="47"><div align="center">1</div></td>
      <td width="338">Presentacion de los estudiantes</td>
      <td width="134"><select name="s1" size="1" id="s1">
        <option>Despliegue...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
      <td><textarea name="ta1" id="ta1" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="47"><div align="center">2</div></td>
      <td height="47"><p><strong>Funcionalidad:</strong></p>
      <p><strong>Eficiente</strong> (Elaborado con el minimo de los recursos)  y</p>
      <p><strong>Eficaz</strong> (Que llene las espectativas)</p></td>
      <td height="47"><select name="s2" id="s2">
        <option>Despliegue...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
      <td height="47"><textarea name="ta2" id="ta2" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="50"><div align="center">3</div></td>
      <td height="50"><strong>Viabilidad:</strong> Que tiene probabilidades de llevarse a cabo o concretarse gracias a sus circunstancias.</td>
      <td height="50"><select name="s3" id="s3">
        <option>Despliegue...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
      <td height="50"><textarea name="ta3" id="ta3" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="50"><div align="center">4</div></td>
      <td height="50"><strong>Innovacion:</strong> El proyecto es mejor que otro que ya esta en el mercado.</td>
      <td height="50"><select name="s4" id="s4">
        <option>Despliegue...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
      <td height="50"><textarea name="ta4" id="ta4" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="50"><div align="center">5</div></td>
      <td height="50">Complejidad de Proyecto</td>
      <td height="50"><select name="s5" id="s5">
        <option>Despliegue...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
      <td height="50"><textarea name="ta5" id="ta5" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="50"><div align="center">6</div></td>
      <td height="50">Dominio del tema</td>
      <td height="50"><select name="s6" id="s6">
        <option>Despliegue...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></td>
      <td height="50"><textarea name="ta6" id="ta6" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="50" colspan="2"><strong>Totales:</strong></td>
      <td height="50" align="center"><p>&nbsp;</p></td>
      <td height="50"><textarea name="ta7" id="ta7" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
  
  
  
  
</form>
</body>
</html>
