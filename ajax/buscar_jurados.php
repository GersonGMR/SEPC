<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
?>

<?php
			
$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "usuarios";
		 $sWhere = "";
		 $sWhere.="WHERE usuarios.Id_Usuarios<=1000 AND usuarios.estado=1";
		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and (usuarios.Nombre like '%$q%' or usuarios.Apellido like '%$q%' or usuarios.Usuario like '%$q%' or categorias.Nombre_Categoria like '%$q%')";
			
		}
		
		$sWhere.=" order by Id_Usuarios asc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 1000; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable WHERE Id_Usuarios<=1000 AND usuarios.estado=1");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './buscar.php';
		//main query to fetch the data
		$sql="SELECT usuarios.Id_Usuarios, usuarios.Nombre, usuarios.Apellido, usuarios.Usuario, categorias.Nombre_Categoria FROM usuarios 
		INNER JOIN categorias ON usuarios.Id_Categoria=categorias.Id_Categoria $sWhere LIMIT $offset,$per_page";
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
					<th>Apellido</th>
					<th>Usuario</th>
					<th>Categoria</th>
					<th>Editar</th>
					<th>Eliminar</th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id=$row['Id_Usuarios'];
						$nNombre=$row['Nombre'];
						$nApellido=$row['Apellido'];
						$User=$row['Usuario'];
						$nCat=$row['Nombre_Categoria'];
		
					?>
					
					<tr id="<?php echo $row['Id_Usuarios']; ?>">
						<td><?php echo utf8_encode($id); ?></td>
						<td><?php echo utf8_encode($nNombre);?></td>
						<td><?php echo utf8_encode($nApellido);?></td>
						<td><?php echo utf8_encode($User);?></td>
						<td><?php echo utf8_encode($nCat);?></td>
						
						<td><?php echo "<form method='post' action='../home/editjurados.php'>
                 <input type='hidden' name='id' value='".$row["Id_Usuarios"]."'>
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
               url: '../funciones/eliminar_jurados.php',
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