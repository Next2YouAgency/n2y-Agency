<?php
	require 'cnf/config.php';
	
	$nome		=	$_POST['nome'];
	$email		=	$_POST['email'];
	$senha		=	md5($_POST['senha']);
	$nivel		=	$_POST['nivel'];
	$twitter	=	"https://www.twitter.com/".$_POST['twitter'];
	$facebook	=	"https://www.facebook.com/".$_POST['facebook'];
	$youtube	=	"https://www.youtube.com/user/".$_POST['youtube'];
	$whatsapp	=	$_POST['whatsapp'];
	
	$queryInserir = "INSERT INTO usuarios(nome,email,senha,nivel,twitter,facebook,youtube,whats) VALUES('$nome','$email','$senha','$nivel','$twitter','$facebook','$youtube','$whatsapp')";
	
	mysql_query($queryInserir)or die(mysql_error());
	
	echo '
		<meta http-equiv="refresh" content="0;index.php">
	';
?>