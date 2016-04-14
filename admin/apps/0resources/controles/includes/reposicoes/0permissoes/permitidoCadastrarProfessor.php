<span class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<img src="img/newTeacher.png" title="Cadastrar novo Professor" alt="Cadastrar novo Professor" style="margin-left:20%">
</span>
</div>
<div id="cadastrarProfessores" style="position:absolute; margin-top:135px; z-index:999" class="btn btn-primary">
<form id="formCadastroProf" name="formCadastroProf" action="includes/reposicoes/cadastrarProfessores.php" method="post">
	<div class="form-group">
		<label>Nome do Professor: </label><input type="text" id="nomeProfessor" name="nomeProfessor" class="form-control">
	</div>
	<div class="form-group">
		<label>Horario de entrada: </label><input type="number" id="primeiroHorario" name="primeiroHorario" class="form-control">
	</div>
	<div class="form-group">
		<label>Horario de saída: </label><input type="number" id="ultimoHorario" name="ultimoHorario" class="form-control">
	</div>
	<input type="submit" name="cadastrarProf" id="cadastrarProf"  class="form-control btn btn-success" value="Cadastrar"><br/>
</form>