<?php 
	
	$error = false;

	$files = array();
	foreach ($_FILES['image'] as $k => $l) {
		foreach ($l as $i => $v) {
			if (!array_key_exists($i, $files)) {
				$files[$i] = array();
				$files[$i][$k] = $v;
			}
		}
	}

	foreach ($files as $file) {
		$handle = new Upload($file);
		if ($handle ->uploaded) {
			$handle->Process("uploads/");
			if ($handle->processed) {
				insert_img("uploads/",$handle->file_dst_name);
			}else{
				$error = true;
				echo 'Error'.$handle->error;;
			}
		}else{
			$error = true;
			echo 'Error'.$handle->error;
		}
		unset($handle);
	}

 ?>