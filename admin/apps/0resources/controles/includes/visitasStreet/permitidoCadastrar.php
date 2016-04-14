<form action="concluirCadastroPreventivo.php" method="post">
	<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
		<div class="form-group">
			<label for="ctr">CTR</label>
			<input type="text" name="ctr" class="form-control">
		</div>
		<div class="form-group">
			<label for="tipo">Tipo de Preventivo</label>
			<select name="tipo" class="form-control">
				<option value="dinheiro">Dinheiro</option>
				<option value="cheque">Cheque</option>
				<option value="debito">Débito</option>
				<option value="credito">Crédito</option>
				<option value="acordo">Acordo</option>
			</select>
		</div>
		<div class="form-group">
			<label for="qtdParcelas">Quantidade de Parcelas</label>
			<input type="number" name="qtdParcelas" class="form-control">
		</div>
		<div class="form-group">
			<label for="valorAprox">Valor Aproximado</label>
			<input type="text" name="valorAprox" class="form-control">
		</div>
		<div class="form-group">
			<label for="dataAgendada">Data agendada</label>
			<input type="date" name="dataAgendada" class="form-control">
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Cadastrar" class="btn btn-primary">
			<a href="home.php" class="btn btn-warning">Cancelar</a>
			<a href="home.php?url=relatorioPreventivo" class="btn btn-success">Ver Meus Preventivos</a>
		</div>
	</div>
</form>