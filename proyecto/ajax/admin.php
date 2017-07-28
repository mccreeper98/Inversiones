<?php 

	require '../conn.pph';

	$acction = (isset($_REQUEST['action'])&&$_REQUEST['action'] != NULL)?$_REQUEST['action']:'';

	if ($action == 'ajax') {
		include 'pagination.php';//se incluye el archivio de paginacion
		//variables de paginacion
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$pro_page = 10; //cantidad de proyectos que se muestran
		$adjacents = 4; //brecha entre paginas despues de varios adyacentes
		$offset = ($page -1)* $pro_page;//cuenta el numero total de filas de la tabla
		//cuenta el numero total de proyectos
		$numProy = "SELECT count(*) AS numrows FROM proyecto"; 
		if ($resultado = $conn->query($numProy)) {
			$numrows = $resultado['numrows'];
		}
		$total_pages = ceil($numrows/$pro_page);
		$reload = 'admin.php'
		//consulta prinipal para recuperar datos
		
	}

 ?>