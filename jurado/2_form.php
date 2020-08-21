
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
<title>Formulario de Tecnologia</title>
<style type="text/css">
#form1 div table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>


<form form action="2.php" method="POST" id="form1" name="form1" method="post" action="">
  <p align="center"><strong>VICE	RECTORIA DE INVESTIGACIÓN Y PROYECCIÓN SOCIAL DIRECCIÓN DE INVESTIGACIÓN</strong></p>
  <div align="center">
    <table width="1426" border="1">
      <tr>
        <td height="184" colspan="4" valign="top"><img src="uees.png" width="180" height="180" /><br /> <p align="center"><strong> Evaluación de Investigación en Cátedra (IC).</strong> <br /> 
          <strong>INSTRUMENTO PARA EVALUAR LA PRESENTACIÓN ESCRITA. ARTÍCULO DE PUBLICACIÓN</strong></p>
         
        

      </tr>
      <tr>
        <td height="46" colspan="4">Jurado: <?php echo $_SESSION['usr'] ?></td></td> 
      </tr>
      <tr>
        <td height="46" colspan="4">Categoria: 
          <?php  
           $res=mysqli_query($link,"SELECT * from jueces where usr = '$varsesion'");
          
           while($row=mysqli_fetch_array($res))
                    {
                      


                       echo $row["nombre_categoria"];


                   

                    }         



          ?>

        </td>
      </tr>
      <tr>
        <td colspan="4"><p><strong>Titulo de Investigación:  
          <select name="nombre_proyecto" id="nombre_proyecto">
          <option>Seleccione el nombre del proyecto</option>
          <?php  
          $res=mysqli_query($link,"SELECT * from grupos where total_cat1 = 0");
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
        <td colspan="4">Indicaciones: Asigne el puntaje que estén acordes con los criterios prescritos. (Considere que tanto cumple con lo requerido en los lineamientos UEES). Escriba observaciones cuando los puntjaes asignados sean menores de la mitad del valor.</td>
      </tr>
      <tr>
        <td width="866" align="center"><strong>Aspectos a Evaluar</strong></td>
        <td width="71" align="center"><strong>Valor en puntajes</strong></td>
        <td width="162" align="center"><strong>Puntaje asignado</strong></td>
        <td width="299" align="center"><strong>OBSERVACIONES</strong></td>
      </tr>
      <tr>
        <td><strong>Resumen.</strong></td>
        <td rowspan="4" align="center">15</td>
        <td rowspan="4"><label for="s1"></label>
          <select name="s1" id="s1">
            <option>Seleccione un valor...</option>
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
        <td rowspan="4"><label for="ta1"></label>
        <textarea name="ta1" id="ta1" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>Palabra clave. Contiene palabras claves que identifican las especificidad del estudio.</td>
      </tr>
      <tr>
        <td>El resumen expresa lo esencial del estudio, realizado en un párrafo de 150 a 250 palabras.</td>
      </tr>
      <tr>
        <td>El resumen incluye el problema, su importancia, breve sustento teórico, objetivos y/o hipótesis explicada (según el caso), la metodología (procedimientos y técnicas aplicados) y los principales resultados obtenidos.</td>
      </tr>
      <tr>
        <td><strong>Introducción.</strong></td>
        <td rowspan="2" align="center">5</td>
        <td rowspan="2"><label for="s2"></label>
          <select name="s2" id="s2">
            <option>Seleccione un valor...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></td>
        <td rowspan="2"><textarea name="ta2" id="ta2" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>Contiene el planteamiento general de la temática investifada y su contexto, el propósito de la investifación, refleja la visción de objetivos, conceptuzalización y fundamento teórico más importante.</td>
      </tr>
      <tr>
        <td><strong>Metodología de la invesstigación.</strong></td>
        <td rowspan="4" align="center">20</td>
        <td rowspan="4"><select name="s3" id="s3">
          <option>Seleccione un valor...</option>
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
        <td rowspan="4"><textarea name="ta3" id="ta3" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>Explica el tipo de estudio realizado, dieño, materiales y métodos, definición de la y análisis estadistico.</td>
      </tr>
      <tr>
        <td>Población, tamaño de la muestra, criterios de inclusión y exclusión de sujetos</td>
      </tr>
      <tr>
        <td>Análisis estadístico y/o conceptual, según el caso.</td>
      </tr>
      <tr>
        <td><strong>Análisis y Discusión de Resultados.</strong></td>
        <td rowspan="4" align="center">40</td>
        <td rowspan="4"><select name="s4" id="s4">
          <option>Seleccione un valor...</option>
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
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="40">40</option>
        </select></td>
        <td rowspan="4"><textarea name="ta4" id="ta4" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>La presentación de los datos y su interpretación es concisa y presenta un orden lógico. Congruencia con el problema, objetivos, hipótesis.</td>
      </tr>
      <tr>
        <td>Compara con justicia y objetividad sus propios resultados con los de otros investigadores.</td>
      </tr>
      <tr>
        <td>Análisis cuantitativo y/o cualitativo según sea el caso. Presenta gráficos o cuadros autoexplicativos, numeradas consecutivamente, cada uno lleva un titulo en la parte superior que no debe ser de más de 10 palabras. Gráficas, fotografías, esquemas y diagramas (máximo 5), frases ilustrativas entre comillas...</td>
      </tr>
      <tr>
        <td><strong>Conclusiones y recomendaciones. </strong></td>
        <td rowspan="2" align="center">10</td>
        <td rowspan="2"><select name="s5" id="s5">
          <option>Seleccione un valor...</option>
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
        <td rowspan="2" align="center"><textarea name="ta5" id="ta5" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>Las conclusiones son congruentes con el problema, objetivos, hipótesis y resultados; se argumentan a partir de la discusión de los resultados y se destacan los aspectos nuevos e importantes de sus observaciones. Se interpretan los resultados obtenidos de los hallazgos principales.</td>
      </tr>
      <tr>
        <td><strong>Fuentes de Información.</strong></td>
        <td rowspan="2" align="center">10</td>
        <td rowspan="2"><select name="s6" id="s6">
          <option>Seleccione un valor...</option>
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
        <td rowspan="2"><textarea name="ta6" id="ta6" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>Incluye referencias o fuentes de información que han sido directamente citadas en el texto.</td>
      </tr>
      <tr>
        <td><strong>TOTAL (Calificación Individual asignada)</strong></td>
        <td align="center">100</td>
        
        <td>&nbsp;</td>
        <td><textarea name="ta7" id="ta7" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td><strong>Nombre y Firma del Evaluador:          
          <label for="tx2"></label>
          <input name="tx2" type="text" id="tx2" size="40" />
        Fecha: 
        <label for="tx3"></label>
        <input name="tx3" type="text" id="tx3" size="15" />
        </strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p align="center">
    <input type ="submit" name="button" id="button" value="Enviar"/>
  </p>
</form>
</body>
</html>
