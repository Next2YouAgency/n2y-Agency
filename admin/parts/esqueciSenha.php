<!--ESQUECI A SENHA-->
<form action="#" method="post" class="form-horizontal roundedComponent <?php echo $xs[11],' ',$sm[11],' ',$md[11],' ',$lg[11]?>">
	<legend>Perdi minha Senha</legend>
	<div class="form-group">
		<div class="form-group">
			<label class="control-label " for="pass">
			<div class="input-group">
				<div class="input-group-addon">
					<img src="img/email.png">
				</div>
					<input type="text" class="form-control input-lg" name="pass" id="pass" placeholder="Email do Usuário">
				<div class="clearfix"></div>
			</div>
			</label>
		</div>
	</div>
	
	<div class="form-group">
		<div class="form-group">
			<label class="control-label" for="pass">
			<div class="input-group">
				<div class="input-group-addon">
					<img src="img/user.png">
				</div>
					<input type="text" class="form-control input-lg" name="pass" id="pass" placeholder="CPF ou CNPJ Cadastrado">
				<div class="clearfix"></div>
			</div>
			</label>
		</div>
	</div>
	
	<div class="form-group">
		<input type="submit" name="btnLogin" value="Recuperar" class="btn btn-success">
		<a href="index.php" class="btn btn-danger">Cancelar</a>
	</div>
</form>