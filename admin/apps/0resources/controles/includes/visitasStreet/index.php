<?php
	
	$usuarioLogado				=	$_SESSION['nome'];
	$deptoUsuario				=	$_SESSION['depto'];
	$permissaoUsuario			=	$_SESSION['nivel'];
	
	
	include_once '0permissoes/permissaoDepto.php';
?>