<?php
	include '../cnf/config.php';
	
	
	#Dados do Post#
	$material		=	$_POST['material'];
	$titulo_post	=	$_POST['titulo_post'];
	$img_principal	=	$_FILES['img_principal'];
	$conteudo_post	=	$_POST['conteudo_post'];
	
	$img1			=	$_POST['img1'];
	$img2			=	$_POST['img2'];
	$img3			=	$_POST['img3'];
	$img4			=	$_POST['img4'];
	$img5			=	$_POST['img5'];
	$img6			=	$_POST['img6'];
	$img7			=	$_POST['img7'];
	$img8			=	$_POST['img8'];
	$img9			=	$_POST['img9'];
	$img10			=	$_POST['img10'];
	
	
	$video_tutorial		=	"Indisponível";
	
	include 'file_upload_principal.php';
	
	####################################
	#Dados do Autor#
	####################################
	$autor			=	$_POST['autor'];
	$email			=	$_POST['email'];
	$nivel			=	$_POST['nivel'];
	$twitter		=	$_POST['twitter'];
	$facebook		=	$_POST['facebook'];
	$whats			=	$_POST['whats'];
	$youtube		=	$_POST['youtube'];
	
	#Refazer o array para as imgs
	$queryInserir	=	"INSERT INTO ".$material."(titulo_post,img_principal,conteudo_post,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,autor,facebook,twitter,whats,youtube) VALUES('$titulo_post','$target_file','$conteudo_post','$img1','$img2','$img3','$img4','$img5','$img6','$img7','$img8','$img9','$img10','$autor','$facebook','$twitter','$whats','$youtube')";
	
	mysql_query($queryInserir)or die(mysql_error());
	echo '
		<script>
			window.history.go(-2);
		</script>
	';
?>