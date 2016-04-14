<?php
	require '../cnf/config.php';
	
	##Dados novos para fazer a mudança no DB##
	$novoUsuario		=	$_POST['novoUsuario'];
	$novaSenha			=	$_POST['novaSenha'];
	$novoNome			=	$_POST['novoNome'];
	$novoDepto			=	$_POST['novoDepto'];
	$novoNivel			=	$_POST['novoNivel'];
	$novaSituacao		=	$_POST['novaSituacao'];
	
	##Dados antigos do usuário##
	$usuarioAntigo		=	$_POST['usuarioAlterar'];
	$senhaAntiga		=	$_POST['senhaAlterar'];
	$nomeAntigo			=	$_POST['nomeAlterar'];
	$deptoAntigo		=	$_POST['deptoAlterar'];
	$nivelAntigo		=	$_POST['nivelAlterar'];
	$situacaoAntiga		=	$_POST['situacaoAlterar'];
	
	$usuarioConfirmar;
	$senhaConfirmar		=	md5('nova');
	$nomeConfirmar;
	$deptoConfirmar;
	$nivelConfirmar;
	$situacaoConfirmar;
	
	#Confirmar Usuario#
	if($novoUsuario != $usuarioAntigo){
		$usuarioConfirmar	=	$novoUsuario;
		#Update Usuario
		$queryUpdateUsuario	=	"UPDATE usuarios SET usuario = '$usuarioConfirmar' WHERE usuario = '$usuarioAntigo'";
		mysql_query($queryUpdateUsuario)or die(mysql_error());
		
	}else{
		$usuarioConfirmar	=	$usuarioAntigo;
		//echo 'Não mudou o usuário: '.$usuarioConfirmar;
	}
		
		
		#Query para atualizar a senha do usuario#
		if($novaSenha === "resetar"){
			$queryUpdateSenha	=	"UPDATE usuarios SET senha = '$senhaConfirmar' WHERE usuario = '$usuarioConfirmar'";
			mysql_query($queryUpdateSenha)or die(mysql_error());
			//echo 'Senha do Usuário resetada no DB<br>';
		}else{
			//echo 'Senha não alterada no DB<br>';
		}
		#Query para atualizar o Nome do usuario#
		if($novoNome != $nomeAntigo){
			$queryUpdateNome	=	"UPDATE usuarios SET nome = '$novoNome' WHERE usuario = '$usuarioConfirmar'";
			mysql_query($queryUpdateNome)or die(mysql_error());
			//echo 'Nome do Usuário alterado no DB<br>';
		}else{
			//echo 'Não Precisa alterar o Nome no DB<br>';
		}
		
		#Query para atualizar o Depto do usuario#
		if($novoDepto != $deptoAntigo){
			$queryUpdateDepto	=	"UPDATE usuarios SET departamento = '$novoDepto' WHERE usuario = '$usuarioConfirmar'";
			mysql_query($queryUpdateDepto)or die(mysql_error());
			//echo 'Departamento do Usuário alterado no DB<br>';
		}else{
			//echo 'Não Precisa alterar o Depto no DB<br>';
		}
		
		#Query para atualizar o Nível do usuario#
		if($novoNivel != $nivelAntigo){
			$queryUpdateNivel	=	"UPDATE usuarios SET nivel = '$novoNivel' WHERE usuario = '$usuarioConfirmar'";
			mysql_query($queryUpdateNivel)or die(mysql_error());
			//echo 'Nível do Usuário alterado no DB<br>';
		}else{
			//echo 'Não Precisa alterar o Nível no DB<br>';
		}
		
		#Query para atualizar a Situação do usuario#
		if($novaSituacao != $situacaoAntiga){
			$queryUpdateSituacao	=	"UPDATE usuarios SET situacao = '$novaSituacao' WHERE usuario = '$usuarioConfirmar'";
			mysql_query($queryUpdateSituacao)or die(mysql_error());
			//echo 'Situação do Usuário alterado no DB<br>';
		}else{
			//echo 'Não Precisa alterar a Situação no DB<br>';
		}
	?>
<meta http-equiv="refresh" content="0;dadosAtualizados.php">