<?php
	#nome do arquivo
	$fileName		=	time($_FILES["img_principal"]["name"]);
	#nome temporário do arquivo
	$tempFileName	=	$_FILES["img_principal"]["tmp_name"];
	#Pasta onde vai fazer o upload
	$target_dir		=	"../../img/".$material."/";
	#nome do arquivo
	$target_file = basename($fileName);
	#autenticar o upload
	$uploadOk = 1;
	
	$destinoFinal	=	$target_dir."/".$target_file.'.png';
	
	
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($tempFileName);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["img_principal"]["size"] > 1024*1024*2) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["img_principal"]["tmp_name"], $destinoFinal)) {
			echo "The file ". basename($fileName). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
?>