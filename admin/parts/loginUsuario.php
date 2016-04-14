<!--LOGIN-->
<form action="" method="post" class="form-horizontal <?php echo $xs[11],' ',$sm[11],' ',$md[11],' ',$lg[11]?> roundedComponent">
<legend>Fazer Login</legend>
	<div class="form-group">
		<div class="form-group">
			<label class="control-label" for="usuario">
			<div class="input-group">
				<div class="input-group-addon">
					<img src="img/user.png">
				</div>
					<input type="text" class="form-control input-lg" name="usuario" id="usuario" placeholder="Digite seu CPF para ter acesso" value="<?php if($usuario['lembrar']){echo $usuario['user'];}?>">
				<div class="clearfix"></div>
			</div>
			</label>
		</div>
	</div>
	
	<div class="form-group">
		<div class="form-group">
			<label class="control-label" for="senhaUser">
			<div class="input-group">
				<div class="input-group-addon">
					<img src="img/login.png">
				</div>
					<input type="password" class="form-control input-lg" name="senhaUser" id="senhaUser" placeholder="Digite sua senha" value="<?php if($usuario['lembrar']){echo $usuario['pass'];}?>">
				<div class="clearfix"></div>
			</div>
			</label>
		</div>
	</div>
	<div class="form-group">
		<label><input type="checkbox" class="" name="lembrar" id="lembrar" value="1" <?php if($usuario['lembrar']){echo "checked='cheked'";}?>> Manter-me conectado</label>
	</div>
	<div class="form-group">
		<input type="submit" name="btnLogin" value="Login" class="btn btn-success">
		<a href="../" class="btn btn-danger">Cancelar</a>
		<a href="index.php?esqueciSenha=y" name="esqueciSenha" class="btn btn-warging">Esqueci a senha</a>
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#solicitarCadastro">Criar Conta</button>
	</div>
</form>