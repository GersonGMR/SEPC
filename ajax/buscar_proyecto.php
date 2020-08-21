<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
?>

<?php
			
$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "proyectos";
		 $sWhere = "";
		 $sWhere.="WHERE proyectos.id_Proyecto<=1000 AND proyectos.estado=1";
		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and (proyectos.nombre_Proyecto like '%$q%' or carreras.nombre_carrera like '%$q%' or usuarios.Usuario like '%$q%')";
			
		}
		
		$sWhere.=" order by id_Proyecto asc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 1000; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable WHERE id_Proyecto<=1000 AND proyectos.estado=1");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './buscar.php';
		//main query to fetch the data
		$sql="SELECT proyectos.nombre_Proyecto, proyectos.id_Proyecto, carreras.nombre_carrera, usuarios.Usuario, certamen.fecha_certamen
            FROM proyectos 
            INNER JOIN carreras ON proyectos.id_carrera=carreras.id_carrera 
            INNER JOIN usuarios ON proyectos.Id_Usuarios=usuarios.Id_Usuarios 
            INNER JOIN certamen ON proyectos.id_certamen=certamen.id_certamen  $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			echo mysqli_error($con);
			?>
			<div class="table-responsive ">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
					<th>#</th>
					<th>Nombre proyecto</th>
					<th>Carrera</th>
					<th>Jurado evaluador</th>
					<th>Fecha</th>
					<th>Editar</th>
					<th>Eliminar</th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id=$row['id_Proyecto'];
						$nproyecto1=$row['nombre_Proyecto'];
						$ncarrera1=$row['nombre_carrera'];
						$nusuario1=$row['Usuario'];
						$nfecha=$row['fecha_certamen'];
		
					?>
					
					<tr id="<?php echo $row['id_Proyecto']; ?>">
						<td><?php echo utf8_encode($id); ?></td>
						<td><?php echo utf8_encode($nproyecto1);?></td>
						<td><?php echo utf8_encode($ncarrera1);?></td>
						<td><?php echo utf8_encode($nusuario1);?></td>
						<td><?php echo utf8_encode($nfecha);?></td>
						
						<td><?php echo "<form method='post' action='../home/editproyectos.php'>
                 <input type='hidden' name='id' value='".$row["id_Proyecto"]."'>
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
               url: '../funciones/eliminar_proyecto.php',
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