<?php 

	require '../conn.php';

	$action = (isset($_REQUEST['action'])&&$_REQUEST['action'] != NULL)?$_REQUEST['action']:'';

	if ($action == 'ajax') {
		include '../pagination.php';//se incluye el archivio de paginacion
		//variables de paginacion
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$pro_page = 4; //cantidad de proyectos que se muestran
		$adjacents = 4; //brecha entre paginas despues de varios adyacentes
		$offset = ($page -1)* $pro_page;//cuenta el numero total de filas de la tabla
		//cuenta el numero total de proyectos
		$numProy = "SELECT count(*) FROM proyecto"; 
		if ($resultado = $conn->query($numProy)) {
			$numrows = $resultado->fetchColumn();
		}
		$total_pages = ceil($numrows/$pro_page);
		$reload = 'admin.php';
		//consulta prinipal para recuperar datos
		$consultaProyecto = "SELECT * FROM proyecto order by Nombre LIMIT $offset, $pro_page";
		$proyecto = $conn->query($consultaProyecto);	

		if ($numrows > 0) {
			?>

			<table class="highlight"> 
          <thead> 
            <tr> 
              <th>Nombre</th>  
              <th>Porcentaje</th> 
              <th>Descripción</th> 
              <th>Estatus</th> 
              <th>Acción</th> 

          </thead> 
 
          <tbody> 

          <?php  
            foreach ($proyecto as $p ) { 
           ?> 
            <tr>  
              <td> <?php echo $p['Nombre']; ?></td> 
              <td><?php echo $p['Por']."%"; ?></td> 
              <td><?php echo $p['Des']; ?></td> 
              <td><?php echo $p['Estatus']; ?></td> 
              <td>  
                <div class="col s12" title="Editar">
                <a class="" id="edit"  href="#EditarProyecto"  data-nombre="<?php $p['Nombre']?>"
                 data-id="<?php echo $p['idProy']?>"><i class="material-icons orange-text" title="Editar proyecto" name="Editar">mode_edit</i></a></div> 
                <div class="col s12" title="Borrar">
                <a class="btnborrar" href="#AgregarProyecto" data-id = "<?php  echo $p['idProy']; ?>"><i class="material-icons red-text" id="delete">delete_forever</i></a></div>  
              </td> 
            </tr> 
            <?php } ?> 
          </tbody> 
        </table>

        <div>

        <?php echo paginate($reload, $page, $total_pages, $adjacents);?>
        	
        </div>
 
        <?php 
		}else{
			?>
			<div>
				<h4>No Hay Proyectos registrados</h4>
			</div>

			<?php 
		}
	}

 ?>