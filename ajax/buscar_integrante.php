<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
?>

<?php
			
$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "integrante";
		 $sWhere = "";
		 $sWhere.="WHERE integrante.id_Integrante<=1000 AND integrante.estado=1";
		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and (integrante.nombre_integrante like '%$q%' or integrante.CIF like '%$q%')";
			
		}
		
		$sWhere.=" order by id_Integrante asc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 1000; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable WHERE id_Integrante<=1000 AND integrante.estado=1");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './buscar_integrante.php';
		//main query to fetch the data
		$sql="SELECT integrante.id_Integrante,integrante.nombre_integrante, integrante.CIF, proyectos.nombre_Proyecto, carreras.nombre_carrera
          FROM integrante INNER JOIN proyectos ON integrante.id_Proyecto=proyectos.id_Proyecto INNER JOIN carreras ON integrante.id_carrera=carreras.id_carrera  $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			echo mysqli_error($con);
			?>
			<div class="table-responsive ">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
					<th>#</th>
					<th>Nombre</th>
					<th>CIF</th>
					<th>Nombre proyecto</th>
					<th>Nombre carrera</th>
					<th>Editar</th>
					<th>Eliminar</th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id=$row['id_Integrante'];
						$nombre_int=$row['nombre_integrante'];
						$cif=$row['CIF'];
						$nproyecto=$row['nombre_Proyecto'];
						$ncarrera=$row['nombre_carrera'];
		
					?>
					
					<tr id="<?php echo $row['id_Integrante']; ?>">
						<td><?php echo utf8_encode($id); ?></td>
						<td><?php echo utf8_encode($nombre_int);?></td>
						<td><?php echo utf8_encode($cif);?></td>
						<td><?php echo utf8_encode($nproyecto);?></td>
						<td><?php echo utf8_encode($ncarrera);?></td>

						
						<td><?php echo "<form method='post' action='../home/editintegrantes.php'>
                 <input type='hidden' name='id' value='".$row["id_Integrante"]."'>
                 <input name='editar' type='submit' value='Editar' class='btn btn-success'>
                 </form>";?></td>

                 <td>
                  
                 <input class='btn btn-danger btn-sm remove' name='eliminar' type='submit' value='Eliminar' class='icon-trash'>
  
                </td>					
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>


			  <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('¿Estas seguro que quieres eliminar este campo ?'))
        {
            $.ajax({
               url: '../funciones/eliminar_integrante.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Algo anda mal...');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Eliminado con exito!");  
               }
            });
        }
    });


</script>
			</div>
			<?php
		}
	}
?>