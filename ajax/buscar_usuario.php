<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
?>

<?php
			
$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "carreras";
		 $sWhere = "";
		 $sWhere.="WHERE carreras.id_carrera<=1000 AND carreras.estado=1";
		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and (carreras.nombre_carrera like '%$q%' or facultades.nombre_facultad like '%$q%')";
			
		}
		
		$sWhere.=" order by id_carrera asc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 1000; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable WHERE id_carrera<=1000 AND carreras.estado=1");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './buscar.php';
		//main query to fetch the data
		$sql="SELECT carreras.id_carrera,carreras.id_facultad,carreras.nombre_carrera,facultades.nombre_facultad FROM  $sTable INNER JOIN facultades ON carreras.id_facultad=facultades.id_facultad $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			echo mysqli_error($con);
			?>
			<div class="table-responsive ">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
					<th>#</th>
					<th>Nombre facultad</th>
					<th>Nombre carrera</th>
					<th>Editar</th>
					<th>Eliminar</th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id=$row['id_carrera'];
						$usuario=$row['nombre_facultad'];
						$correo=$row['nombre_carrera'];
		
					?>
					
					<tr id="<?php echo $row['id_carrera']; ?>">
						<td><?php echo utf8_encode($id); ?></td>
						<td><?php echo utf8_encode($usuario);?></td>
						<td><?php echo utf8_encode($correo);?></td>
						
						<td><?php echo "<form method='post' action='../home/editcarrera.php'>
                 <input type='hidden' name='id' value='".$row["id_carrera"]."'>
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
               url: '../funciones/eliminar_carrera.php',
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