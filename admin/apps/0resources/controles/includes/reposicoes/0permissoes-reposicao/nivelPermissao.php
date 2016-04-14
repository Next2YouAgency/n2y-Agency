<?php
	switch($permissaoUsuario){
		case 'master':
			include 'includes/reposicoes/0permissoes-reposicao/finalizaRepo.php';
			include 'includes/reposicoes/0permissoes-reposicao/addStudent.php';
		break;
		
		case 'administrativo': include 'includes/reposicoes/0permissoes-reposicao/addStudent.php';
		break;
		
		case 'coordenador':
			include 'includes/reposicoes/0permissoes-reposicao/finalizaRepo.php';
			include 'includes/reposicoes/0permissoes-reposicao/addStudent.php';
		break;
		
		case 'gerente': include 'includes/reposicoes/0permissoes-reposicao/addStudent.php';
		break;
		
		case 'professor': include 'includes/reposicoes/0permissoes-reposicao/addStudent.php';
		break;
		
		case 'supervisor': include 'includes/reposicoes/0permissoes-reposicao/addStudent.php';
		break;
		
		default: echo 'Erro ao identificar os níveis de permissão! Contate o Administrador do Sistema!';
	}
?>