<?php
	switch($permissaoUsuario){
		case 'master': include 'includes/preventivos/permitidoCadastrar.php';
		break;
		
		case 'administrativo': include 'includes/preventivos/naoPermitidoCadastrar.php';
		break;
		
		case 'coordenador': include 'includes/preventivos/naoPermitidoCadastrar.php';
		break;
		
		case 'gerente': include 'includes/preventivos/naoPermitidoCadastrar.php';
		break;
		
		case 'professor': include 'includes/preventivos/naoPermitidoCadastrar.php';
		break;
		
		case 'supervisor': include 'includes/preventivos/permitidoCadastrar.php';
		break;
		
		default: echo '<script> alert("Erro ao identificar os níveis de permissão! \nContate o Administrador do Sistema!")</script>';
	}
?>