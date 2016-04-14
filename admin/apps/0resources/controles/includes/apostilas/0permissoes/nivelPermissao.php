<?php
	switch($permissaoUsuario){
		case 'master': include 'includes/apostilas/editarApostilas.php';
		break;
		
		case 'administrativo': include 'includes/apostilas/btnImprimirApostilas.php';
		break;
		
		case 'coordenador': include 'includes/apostilas/editarApostilas.php';
		break;
		
		case 'gerente':  include 'includes/apostilas/btnImprimirApostilas.php';
		break;
		
		case 'professor': include 'includes/apostilas/btnImprimirApostilas.php';
		break;
		
		case 'supervisor': include 'includes/apostilas/btnImprimirApostilas.php';
		break;
		
		default: echo 'Erro ao identificar os níveis de permissão! Contate o Administrador do Sistema!';
	}
?>