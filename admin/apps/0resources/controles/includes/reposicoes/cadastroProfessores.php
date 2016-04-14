<?php
	$deptoUsuario	=	$_SESSION['depto'];
	$permissaoUsuario	=	$_SESSION['nivel'];
?>


		<div id="abrirCadastroProfessor" title="Cadastrar novo Professor" alt="Cadastrar novo Professor" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include 'includes/reposicoes/0permissoes/permissaoDepto.php'?>
		</div><!--cadastrarProfessores-->