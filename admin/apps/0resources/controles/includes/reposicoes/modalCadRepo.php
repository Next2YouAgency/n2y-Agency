<?php
	$professor = $_POST['escolhaProfessor'];
?>


		<div id="marcarReposicao" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">							
			<table border="1" align="center" class="table-bordered table-responsive">
				<div class="form-group">
					<label for="ctrAluno">CTR</label>
					<input type="text" class="form-control" id="ctrAluno" name="ctrAluno" />
				</div>
				<div class="form-group">
					<label for="nomeAluno">Nome do aluno</label>
					<input type="text" class="form-control" id="nomeAluno" name="nomeAluno" />
				</div>
				<div class="form-group">
					<label for="moduloC">M&oacute;dulo</label>
					<select class="form-control" id="moduloC" name="moduloC" />
					<?php
						/* BUSCA DOS MÓDULOS */
					$queryConsultaModulos = "SELECT * FROM modulos";
					$exeQrConsultaModulos = mysql_query($queryConsultaModulos);
					
					if(mysql_num_rows($exeQrConsultaModulos)<=0){
						echo'Não há módulos';
					}else{
						while($modulo	=	mysql_fetch_array($exeQrConsultaModulos)){
							
						?>
						<option value="<?php echo $modulo['modulo']?>"><?php echo $modulo['modulo']?></option>
						<?php
						}
					}
					?>
					</select>
				</div>
				<div class="form-group">
					<label for="aulaModulo">Aula</label>
					<input type="text" class="form-control" id="aulaModulo" name="aulaModulo" />
				</div>
				<div class="form-group">
					<label for="diaReposicao">Dia da Reposi&ccedil;&atilde;o</label>
					<input type="date" class="form-control" id="diaReposicao" name="diaReposicao" />
				</div>
				<div class="form-group">
					
					
					<?php
						include 'includes/reposicoes/SESSIONS_REPO.php';
						
					?>
						<input type="hidden" value="<?php echo $marcar?>" id="horaReposicao" name="horaReposicao" >
						<input type="hidden" value="<?php echo $_SESSION['funcionario']?>" name="funcionario">
						<input type="hidden" value="<?php echo $_SESSION['horaRepo']?>" name="horaReposicao">
						<input type="hidden" value="<?php echo $_SESSION['professor']?>" name="profReposicao">
					
				</div>
			</table>
	</div><!--marcarReposicao-->