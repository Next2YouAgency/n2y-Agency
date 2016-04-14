<?php
	$moduloIncluir = $_POST['apostilasIncluir'];
	$qtdIncluir = $_POST['qtdIncluir'];
	
	if($moduloIncluir == "")
	{
	}else{
		incluirApostila($moduloIncluir,$qtdIncluir);
	}
?>
<form id="formincluirApostila" name="form3" method="post" action="" class="form-horizontal">
	<h2>
		Incluir apostila
		<button type="button" name="fechar" class="btnAddApostilasFechar close"/><span aria-hidden="true">&times;</span></button>
	</h2>
		<div class="form-group">
			<label for="apostilasIncluir">Apostila:</label>
			<select name="apostilasIncluir" class="entradaTexto form-control">
			<option value="windows">Windows</option>
			<option value="word">Word</option>
			<option value="powerpoint">PowerPoint</option>
			<option value="excel">Excel</option>
			<option value="criacao">Criação e Design</option>
			<option value="coreldraw">CorelDraw</option>
			<option value="photoshop">PhotoShop</option>
			<option value="fireworks">Fireworks</option>
			<option value="dreamweaver">Dreamweaver</option>
			<option value="xhtml">Xhtml</option>
			<option value="logica">Lógica de Programação</option>
			<option value="javascript">Javascript</option>
			<option value="php">PHP</option>
			<option value="asp">ASP</option>
			<option value="flash">Flash</option>
			<option value="redes">Redes de Computadores</option>
			<option value="hardware">Hardware</option>
			<option value="administracao">Administração</option>
			<option value="secretariado">Secretariado</option>
			<option value="departamento">Departamento de Pessoal</option>
			<option value="contabilidade">Contabilidade</option>
			<option value="modelagem">Modelagem</option>
			<option value="excelav">Excel Avançado</option>
			<option value="excel">excel</option>
			<option value="excel">excel</option>
			</select>
		</div>
		<div class="form-group">
			<label for="qtdIncluir">Quantidade</label>
			<input type="number" name="qtdIncluir" class="entradaTexto form-control" placeholder="Quantidade" />
		</div>
		<input type="submit" name="pegarEntregar" class="btn" value="Adicionar" /></td>
</form>