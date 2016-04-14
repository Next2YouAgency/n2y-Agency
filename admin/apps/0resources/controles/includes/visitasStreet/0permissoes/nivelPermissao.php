<?php
	switch($permissaoUsuario){
		case 'master': include 'includes/visitasStreet/permitido.php';
		break;
		
		case 'administrativo': include 'includes/visitasStreet/naoPermitido.php';
		break;
		
		case 'coordenador': include 'includes/visitasStreet/naoPermitido.php';
		break;
		
		case 'gerente': include 'includes/visitasStreet/naoPermitido.php';
		break;
		
		case 'professor': include 'includes/visitasStreet/naoPermitido.php';
		break;
		
		case 'supervisor': include 'includes/visitasStreet/permitido.php';
		break;
		
		default: echo 'Erro ao identificar os níveis de permissão! Contate o Administrador do Sistema!';
	}
?>