<?php
	require_once 'config.php';
	
	ob_start();
	session_start();
	
	if(isset($_GET['login'])){
		$aluno['id']				=	session_id();
		$aluno['on']				=	time();
		$aluno['nome']				=	$_GET['nome_aluno'];
		$aluno['matricula_aluno']	=	$_GET['matricula_aluno'];
		$aluno['turma_aluno']		=	$_GET['turma_aluno'];
		$aluno['ip']				=	$_SERVER['REMOTE_ADDR'];
		
		$_SESSION['aluno']			=	$aluno;
		header('Location: '.$_SERVER['PHP_SELF']);
	}
	
	
	if(empty($_SESSION['aluno'])){
		echo 'O usuáio não está conectado, fazer login novamente.';
	}else{

	}
	
	ob_end_flush();
?>