<?php
	switch($permissaoUsuario){
		case 'master': include 'includes/preventivos/permitido.php';
		break;
		
		case 'administrativo': include 'includes/preventivos/naoPermitido.php';
		break;
		
		case 'coordenador': include 'includes/preventivos/naoPermitido.php';
		break;
		
		case 'gerente': include 'includes/preventivos/naoPermitido.php';
		break;
		
		case 'professor': include 'includes/preventivos/naoPermitido.php';
		break;
		
		case 'supervisor': include 'includes/preventivos/permitido.php';
		break;
		
		default: echo 'Erro ao identificar os níveis de permissão! Contate o Administrador do Sistema!';
	}
?>