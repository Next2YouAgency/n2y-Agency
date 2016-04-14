<?php
	session_start();
	$usuario	=	$_SESSION['usuario'];
	$senha		=	$_SESSION['senha'];
	session_destroy();
?>
<meta http-equiv="refresh" content="0;../index.php">