<?php
	$queryListarPreventivos	=	"SELECT * FROM historicopreventivo";
	$exeQrListarPreventivos	=	mysql_query($queryListarPreventivos)or die(mysql_error());
	
	$usuarioLogado			=	$_SESSION['nome'];
	$deptoUsuario		=	$_SESSION['depto'];
	$permissaoUsuario	=	$_SESSION['nivel'];
	
	$acao				=	$_GET['acao'];
	if($acao === 'cadastrar'){
		
	}else{
		include_once '0permissoes/permissaoDepto.php';
	}
?>