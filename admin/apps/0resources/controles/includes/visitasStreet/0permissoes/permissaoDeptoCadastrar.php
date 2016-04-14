<?php
	switch($deptoUsuario){
		case 'administracao': include 'nivelPermissaoCadastrar.php';
		break;
		
		case 'comercial': include 'nivelPermissaoCadastrar.php';
		break;
		
		case 'direcao': include 'nivelPermissaoCadastrar.php';
		break;
		
		case 'pedagogico': include 'nivelPermissaoCadastrar.php';
		break;
		
		default: include 'nivelPermissaoCadastrar.php';
	}
?>