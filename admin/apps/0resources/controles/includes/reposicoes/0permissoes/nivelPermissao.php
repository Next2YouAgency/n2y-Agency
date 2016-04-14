<?php
	switch($permissaoUsuario){
		case 'master': include 'includes/reposicoes/0permissoes/permitidoCadastrarProfessor.php';
		break;
		
		case 'administrativo': include 'includes/reposicoes/0permissoes/naoPermitidoCadastrarProfessores.php';
		break;
		
		case 'coordenador': include 'includes/reposicoes/0permissoes/permitidoCadastrarProfessor.php';
		break;
		
		case 'gerente': include 'includes/reposicoes/0permissoes/naoPermitidoCadastrarProfessores.php';
		break;
		
		case 'professor': include 'includes/reposicoes/0permissoes/naoPermitidoCadastrarProfessores.php';
		break;
		
		case 'supervisor': include 'includes/reposicoes/0permissoes/naoPermitidoCadastrarProfessores.php';
		break;
		
		default: echo 'Erro ao identificar os níveis de permissão! Contate o Administrador do Sistema!';
	}
?>