<?php

	switch($deptoUsuario){
		case 'comercial': include 'nivelPermissao.php';
		break;
		
		case 'administrativo': include 'nivelPermissao.php';
		break;
		
		case 'direcao': include 'nivelPermissao.php';
		break;
		
		case 'pedagogico': include 'nivelPermissao.php';
		break;
		
		case 'professor': include 'nivelPermissao.php';
		break;
		
		default: include 'nivelPermissao.php';
	}
?>