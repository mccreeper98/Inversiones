<?php 
	
	if (isset($_POST['id'])) {
		require '../conn.php';
		$id = $_POST['id'];
		$eliminar = "DELETE FROM proyecto WHERE idProy = '$id'";
		if ($conn->query($eliminar)) {
			echo "done";
		}else{
			echo "error";
		}
	}else{
		echo "error";
	}

 ?>