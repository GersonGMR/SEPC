
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
<form form action="EvPresentacionOral.php" id="form1" name="form1" method="post" action="">
  <table width="871" border="1" align="center">
    <tr>
      <td height="54" colspan="4" align="center" valign="top"><p align="left"><img src="uees.png" width="180" height="180" /> VICERECTORIA DE INVESTIGACIÓN Y PROYECCIÓN SOCIAL DIRECCION DE INVESTIGACIÓN<br /> 
      <p align="center">INSTRUMENTO PARA EVALUAR LA PRESENTACION ORAL</p>
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
    <br />
      <td height="58" colspan="4" valign="top"><strong>Escala de evaluacion:</strong> Asigne el puntaje que esten acordes con los criterios prescritos(Considere que tanto cumple con lo requerido en los lineamientos UEES) Escriba observaciones cuando los puntajes asignados sean menores de la mitad del valor...</td>
    </tr>
    <tr>
      <td width="341" align="center"><strong>Aspectos a Evaluar</strong></td>
      <td width="57" align="center"><strong>Valor en puntaje</strong></td>
      <td width="146" align="center"><strong>Puntaje asignado</strong></td>
      <td width="299" align="center"><strong>OBSERVACIONES</strong></td>
    </tr>
    <tr>
      <td><strong>Planteamiento del problema</strong></td>
      <td rowspan="4" align="center">10</td>
      <td rowspan="4" align="center"><label for="select"></label>
        <select name="s1" id="s1">
          <option>Seleccione puntaje</option>
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
      <td rowspan="4"><label for="ta"></label>
      <textarea name="ta" id="ta" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="24">- Emplea un lenguajeclaro y preciso</td>
    </tr>
    <tr>
      <td height="24">- Se identifican breves antecedentes y situacion problemarica</td>
    </tr>
    <tr>
      <td height="50"><p>- Sintetiza concretamente el problema(Enunciado del prolema)</p></td>
    </tr>
    <tr>
      <td height="32"><strong>Fundamentacion teorica y conceptual relevante</strong></td>
      <td rowspan="6" align="center">5</td>
      <td rowspan="6" align="center"><label for="select2"></label>
        <select name="s2" id="s2">
          <option>Seleccione puntaje</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="4">5</option>
      </select></td>
      <td rowspan="6"><label for="ta2"></label>
      <textarea name="ta2" id="ta2" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="47">- Sustenta teoricamente el estudio</td>
    </tr>
    <tr>
      <td height="67">- Expone enfoques, investigaciones y antecedentes en general</td>
    </tr>
    <tr>
      <td height="67">- Inspira nuevas lineas o areas de investigacion</td>
    </tr>
    <tr>
      <td height="32">- Provee un marco de referencia para interpretar los resultados del estudio</td>
    </tr>
    <tr>
      <td height="33">- Contiene informacion actualizada, relevante y necesaria que fundamenta el problema de estudio</td>
    </tr>
    <tr>
      <td height="16"><strong>Justificacion.</strong></td>
      <td rowspan="4" align="center">10</td>
      <td rowspan="4"><select name="s3" id="s3">
        <option>Seleccione puntaje</option>
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
      <td rowspan="4"><label for="ta3"></label>
      <textarea name="ta3" id="ta3" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="31">- Se plantean claramente las razones que motivaron el estudio</td>
    </tr>
    <tr>
      <td height="34">- Plantea el proposito, la conveniencia y beneficios que aporta el estudio realizado</td>
    </tr>
    <tr>
      <td height="34">- Plantea la importancia y trascendencia del estudio</td>
    </tr>
    <tr>
      <td><strong>Objetivos</strong></td>
      <td rowspan="2" align="center">10</td>
      <td rowspan="2"><select name="s4" id="s4">
        <option>Seleccione puntaje</option>
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
      <td rowspan="2"><label for="ta4"></label>
      <textarea name="ta4" id="ta4" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>- Los objetivos son congruentes con el problema y resultados(con la hipotesis si fuera necesario)</td>
    </tr>
    <tr>
      <td><strong>Metodologia</strong></td>
      <td rowspan="5" align="center">5</td>
      <td rowspan="5"><select name="s5" id="s5">
        <option>Seleccione puntaje</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select></td>
      <td rowspan="5"><label for="ta5"></label>
      <textarea name="ta5" id="ta5" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="34">- Se especifica y describe el tipo,enfoque de investigacion, diseño de investigacion(segun el caso)</td>
    </tr>
    <tr>
      <td height="35">- Describe a los sujetos u objetos de estudio</td>
    </tr>
    <tr>
      <td height="40">- Presenta tecnicas e intrumentos de investigacion utilizados</td>
    </tr>
    <tr>
      <td height="40">- Describe los procedimientos, materiales y metodos, segun el caso.</td>
    </tr>
    <tr>
      <td><strong>Analisis y Discusion de resultados</strong></td>
      <td rowspan="5" align="center">40</td>
      <td rowspan="5"><select name="s6" id="s6">
        <option>Seleccione puntaje</option>
          <option value="1">5</option>
          <option value="2">10</option>
          <option value="3">15</option>
          <option value="4">20</option>
          <option value="5">25</option>
          <option value="6">30</option>
          <option value="7">35</option>
          <option value="8">40</option>         
      </select></td>
      <td rowspan="5"><label for="ta6"></label>
      <textarea name="ta6" id="ta6" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>- Demuestran clara congruencia con el problema, objetivos y teorias</td>
    </tr>
    <tr>
      <td>- Se apoya con graficas, diagramas, datos, figuras, esquemas o frases claves, para ilustrar los resultados</td>
    </tr>
    <tr>
      <td>- Se presenta suficiente referencia que apoya los resultados encontrados</td>
    </tr>
    <tr>
      <td>- Contraste de resultados de otros estudios y/o datos existentes similares con los encontrados en esta investigacion</td>
    </tr>
    <tr>
      <td><strong>Conclusiones y Recomendaciones</strong></td>
      <td rowspan="3" align="center" valign="middle">20</td>
      <td rowspan="3"><select name="s7" id="s7">
        <option>Seleccione puntaje</option>
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
          <option value="1">11</option>
          <option value="2">12</option>
          <option value="3">13</option>
          <option value="4">14</option>
          <option value="5">15</option>
          <option value="6">16</option>
          <option value="7">17</option>
          <option value="8">18</option>
          <option value="9">19</option>
          <option value="10">20</option>
      </select></td>
      <td rowspan="3"><label for="ta7"></label>
      <textarea name="ta7" id="ta7" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>- Las conclusiones estan acordes con los objetivos, hipotesis planteados</td>
    </tr>
    <tr>
      <td>- Las recomendaciones son factibles de realizar y dirigidas a las entidades especificas; En sintesis, demuestran aplicabilidad practica.</td>
    </tr>
    <tr>
      <td height="35"><strong>TOTAL (Calificación individual asignada)</strong></td>
      <td height="35" align="center">100</td>
      <td>&nbsp;</td>
      <td><label for="ta8"></label>
      <textarea name="ta8" id="ta8" cols="45" rows="5"></textarea></td>
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
        <input name="tx3" type="text" id="tx3" size="70" />
      </strong></td
    ></tr>
  </table>
  <p>&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
  
  
  
  
</form>
</body>
</html>
