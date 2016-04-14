<!-- Seleção do Professor para Reposição de Aulas-->
<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
	<form class="formProf" name="formProf" method="POST">
		<div class="form-group">
		<label for="escolhaProfessor">Escolha o Professor:</label>
		
		
	<?php

		$consultaProfessor = 'SELECT * FROM professores';
		$visualizaProfessor = mysql_query($consultaProfessor) or die(mysql_error());
		if(mysql_num_rows($visualizaProfessor) <= 0)
		{
			?>

			Sem professores cadastrados
			
			<?php
		}
		?>
			<select name="escolhaProfessor" class="selectProfessor form-control">
		<?php
		while($res = mysql_fetch_assoc($visualizaProfessor))
		{
			?><option value="<?php echo $res['nomeProfessor']?>"><?php echo $res['nomeProfessor']?></option>
			<?php
		}
	?>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" value="Buscar" class="form-control btn btn-success" />
	</div>
	</form>
</div>