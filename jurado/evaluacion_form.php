
<?php 
  session_start();
  $varsesion = $_SESSION['usr'];

  if($varsesion == null || $varsesion == '')
  {
    echo 'Usted no tiene permiso de ver este contenido.';
    die();
  }

  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"proyecto")
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
<form form action="evaluacion.php" method="POST" id="form1" name="form1" method="post" action="">
  <table width="878" border="1" align="center">
    <tr>
      <td height="54" colspan="4" align="center" valign="top"><p align="left"><img src="uees.png" width="180" height="180" /> VICERECTORIA DE INVESTIGACIÓN Y PROYECCIÓN SOCIAL DIRECCION DE INVESTIGACIÓN<br /> 
      <p align="center">Evaluación de investigación en Cátedra (IC)</p>
      <p align="center"><strong>INSTRUMENTO PARA EVALUAR LA PRESENTACIÓN ESCRITA . DOCUMENTO COMPLETO</strong></p></td>
    </tr>
     <tr>
        <td height="46" colspan="4">Jurado: <?php  echo $_SESSION['usr']  ?> 
        </td>
      </tr>
      <tr>
        <td height="46" colspan="4">Categoria:
             <?php  
           $res=mysqli_query($link,"SELECT * from jueces where usr = '$varsesion'");
          
           while($row=mysqli_fetch_array($res))
                    {
                      


                       echo $row["nombre_categoria"];

                   

                    }         


          ?></td>

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
    <tr>
      <td height="58" colspan="4" valign="top"><strong>Indicaciones:</strong> Asigne el puntaje donde se ubica la calificación que considere de acuerdo con el contenido del informe final en congruencia con lo Lineamientos Básicos para elaborar Anteproyectos en informes de investigación.<strong> Escriba observaciones cuando los puntajes asignados sean menores o iguales a la mitad del valor.</strong></td>
    </tr>
    <tr>
      <td width="345" align="center"><strong>Aspectos a evaluar</strong></td>
      <td width="59" align="center"><strong>Valor en puntaje</strong></td>
      <td width="159" align="center"><strong>Puntaje asignado</strong></td>
      <td width="287" align="center"><strong>OBSERVACIONES</strong></td>
    </tr>
    <tr>
      <td><strong>Resumen.</strong></td>
      <td rowspan="2" align="center">5</td>
      <td rowspan="2" align="center"><label for="s9"></label>
        <select name="s1" id="s1">
          <option>seleccione un valor...</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select></td>
      <td rowspan="2"><label for="ta"></label>
      <textarea name="ta" id="ta" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="50">Expresa lo esencial del estudio realizado en un parrafo de 150 a 250 palabras (aprox 1/2 pagina)</td>
    </tr>
    <tr>
      <td height="67">Forma y estilo (margenes, numeración de pagina, formato, ortografía y estilo).</td>
      <td align="center">10</td>
      <td align="center"><label for="s10"></label>
        <select name="s2" id="s2">
          <option>seleccione un valor...</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
      </select></td>
      <td><label for="ta2"></label>
      <textarea name="ta2" id="ta2" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="34"><strong>CAPITULO I. Planteamiento del problema</strong></td>
      <td rowspan="2" align="center">10</td>
      <td rowspan="2"><select name="s3" id="s3">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td rowspan="2"><label for="ta3"></label>
      <textarea name="ta3" id="ta3" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="49">Contiene la descripción, delimitación y el enunciado del problema asi como la viabilidad de su ejecución.</td>
    </tr>
    <tr>
      <td><strong>CAPITULO II. Fundamentación teórica</strong></td>
      <td rowspan="2" align="center">15</td>
      <td rowspan="2"><select name="s4" id="s4">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
      </select></td>
      <td rowspan="2"><label for="ta4"></label>
      <textarea name="ta4" id="ta4" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Hace referencia al tipo de enfoque a los principios, teorias o leyes que explican los hechos y relaciones en el estudio, compara y comenta los resultados de investigaciones anteriores al estudio contiene un marco conceptual esquematizado que explica la realidad en estudio. </td>
    </tr>
    <tr>
      <td><strong>CAPITULO III. Justificación, Objetivos e Hipótesis</strong></td>
      <td rowspan="2" align="center">15</td>
      <td rowspan="2"><select name="s5" id="s5">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
      </select></td>
      <td rowspan="2"><label for="ta5"></label>
      <textarea name="ta5" id="ta5" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="71">Contempla la importancia, el beneficio futuro a personas, instituciones, comunidades cientificas o grupos sociales, los objetivos y las hipótesis de investsigación.</td>
    </tr>
    <tr>
      <td><strong>CAPITULO IV. Metodología de investigación</strong></td>
      <td rowspan="2" align="center">15</td>
      <td rowspan="2"><select name="s6" id="s6">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
      </select></td>
      <td rowspan="2"><label for="ta6"></label>
      <textarea name="ta6" id="ta6" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Explica el tipo y diseño de la investigación, las unidades de análisis, la población y la selección de la muestra. Conceptualiza y operacionaliza las variables de estudio. Contiene el cuadro matriz que expresa congruencia entre las diferentes partes del documento. Menciona los instrumentos y técnicas el procesamiento y análisis de datos obtenidos en la investigación. </td>
    </tr>
    <tr>
      <td><strong>CAPITULO V. Análisis y discusión de resultados</strong></td>
      <td rowspan="6" align="center" valign="middle">20</td>
      <td rowspan="6"><select name="s7" id="s7">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
      </select></td>
      <td rowspan="6"><label for="ta7"></label>
      <textarea name="ta7" id="ta7" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Da explicación del proceso de análisis desarrollado, desde como se tabularon y organizaron los datos, como se presentan y describen.</td>
    </tr>
    <tr>
      <td>Menciona los estadisticos que se utilizaron y la justificación de su uso, los programas de computación , el proceso seguido en las pruebas de hipótesis (cuando se haya realizado).</td>
    </tr>
    <tr>
      <td>En el análisis descriptivo hace uso de cuadros y gráficos bien elaborados y acordes a la información obtenida, las relaciona adecuadamente.</td>
    </tr>
    <tr>
      <td>El resultado de la prueba estadística utilizada es analizada en interpretada correctamente (cuando se haya realizado).</td>
    </tr>
    <tr>
      <td>Hace interpretación critica y discusión de resultados por variable o por unidad de analísis o grupos.</td>
    </tr>
    <tr>
      <td><strong>CAPÍTULO VI. Conclusiones y recomendaciones </strong></td>
      <td rowspan="4" align="center">10</td>
      <td rowspan="4"><select name="s8" id="s8">
        <option>seleccione un valor...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
      <td rowspan="4"><label for="ta8"></label>
      <textarea name="ta8" id="ta8" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Las conclusiones son congruentes con los objetivos e hipotesis formuladas.</td>
    </tr>
    <tr>
      <td>Presenta recomendaciones.</td>
    </tr>
    <tr>
      <td>Las fuentes de información consultadas estan escritas correctamente y tienen su respectiva cita en el texto.</td>
    </tr>
    <tr>
      <td height="35"><strong>TOTAL (Calificación asignada)</strong></td>
      <td height="35" align="center">100</td>
      <td>&nbsp;</td>
      <td><label for="ta9"></label>
      <textarea name="ta9" id="ta9" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="38" colspan="4"><strong>Nombre y firma del evaluador
        <label for="tx2"></label>
        <input name="tx2" type="text" id="tx2" size="60" />
      </strong></td>
    </tr>
    <tr>
      <td height="40" colspan="4"><strong>Fecha de evaluacion:
        <label for="tx3"></label>
        <input name="tx3" type="text" id="tx3" size="40" />
      </strong></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="Enviar"/>
  </p>
</form>
</body>
</html>
