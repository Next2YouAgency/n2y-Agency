<?php
	
	switch($permissaoUsuario){
		case 'master': include 'includes/0homePermissoes/admMaster.php';
		break;
		
		case 'coordenador': echo '';
		break;
		
		case 'gerente': echo '';
		break;
		
		case 'administrativo': echo '';
		break;
		
		case 'professor': echo '';
		break;
		
		case 'supervisor': echo '';
		break;
		
		default: echo 'Erro ';
	}
?>