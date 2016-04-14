<?php
	session_start();	
	$_SESSION['usuarioAlterar']	=	$_GET['usuario'];
	$_SESSION['senhaAlterar']	=	$_GET['senha'];
	$_SESSION['nomeAlterar']	=	$_GET['nome'];
	$_SESSION['deptoAlterar']	=	$_GET['depart'];
	$_SESSION['nivelAlterar']	=	$_GET['nivel'];
	$_SESSION['situacaoAlterar']=	$_GET['situacao'];
	
?>
<form action="includes/alterarSituacaoConcluir.php" class="" method="post">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<label for="novoUsuario">Login</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<label for="novaSenha">Senha</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<label for="novoNome">Nome</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<label for="novoDepto">Departamento</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<label for="novoNivel">Nível</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<label for="novaSituacao">Situação</label>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<input type="text" name="novoUsuario" value="<?php echo $_SESSION['usuarioAlterar']?>" class="form-control">
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<select name="novaSenha" class="form-control">
			<option value="vazio">Permanecer</option>
			<option value="resetar">Resetar</option>
		</select>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<input type="text" name="novoNome" value="<?php echo $_SESSION['nomeAlterar']?>" class="form-control">
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<select name="novoDepto" class="form-control">
			<?php include 'includes/listas/departamentos.php'?>
		</select>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<select name="novoNivel" class="form-control">
			<?php include 'includes/listas/niveis.php'?>
		</select>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
		<select name="novaSituacao" class="form-control">
			<?php include 'includes/listas/situacoes.php'?>
		</select>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top:25px">
		<input type="hidden" value="<?php echo $_SESSION['usuarioAlterar']?>" name="usuarioAlterar">
		<input type="hidden" value="<?php echo $_SESSION['senhaAlterar']?>" name="senhaAlterar">
		<input type="hidden" value="<?php echo $_SESSION['nomeAlterar']?>" name="nomeAlterar">
		<input type="hidden" value="<?php echo $_SESSION['deptoAlterar']?>" name="deptoAlterar">
		<input type="hidden" value="<?php echo $_SESSION['nivelAlterar']?>" name="nivelAlterar">
		<input type="hidden" value="<?php echo $_SESSION['situacaoAlterar']?>" name="situacaoAlterar">
		<input type="submit" value="Fazer alterações" class="btn btn-warning">
		<a href="home.php" class="btn btn-primary">Cancelar Alterações</a>
	</div>
</form>