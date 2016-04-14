<?php
	switch($deptoUsuario){
		case 'administracao': include 'nivelPermissao.php';
		break;
		
		case 'comercial': include 'nivelPermissao.php';
		break;
		
		case 'direcao': include 'nivelPermissao.php';
		break;
		
		case 'pedagogico': include 'nivelPermissao.php';
		break;
		
		default: include 'nivelPermissao.php';
	}
?>