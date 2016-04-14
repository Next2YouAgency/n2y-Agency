		<?php
			$moduloEntregar = $_POST['apostilasEntregar'];
			$qtdEntregar = $_POST['qtdEntregar'];

			if($moduloEntregar == "")
			{
			}else{
				entregarApostila($moduloEntregar,$qtdEntregar);
			}
		?>
		
		<form id="formEntregarApostila" name="formEntregarApostila" method="post" action="" class="form-horizontal">
		<h2>
			Entregar apostila
			<button type="button" name="fechar" class="btnApostilasFechar close"/><span aria-hidden="true">&times;</span></button>
		</h2>		
		<div class="form-group">
			<label for="apostilasEntregar">Apostila:</label>
				<select name="apostilasEntregar" class="entradaTexto form-control">
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
				</select>
			</div>
			<div class="form-group">
				<label for="qtdEntregar">Quantidade</label>
				<input type="number" name="qtdEntregar" class="form-control" placeholder="Quantidade" />
			</div>
			<input type="submit" name="pegarEntregar" class="btn" value="Entregar" />
		</form>
		