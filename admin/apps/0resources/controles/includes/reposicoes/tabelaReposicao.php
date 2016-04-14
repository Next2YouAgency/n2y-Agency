<?php 
	$query = "SELECT nomeProfessor,primeiroHorario,ultimoHorario FROM professores WHERE nomeProfessor = '$professor'";
	$exeqr = mysql_query($query) or die (mysql_error());

	if(mysql_num_rows($exeqr) <= 0)
	{
		
	}else{
	?>
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" id="tabela_reposicoes">
		<table class="table-bordered table-responsive" cellpadding="0" cellspacing="0">
		<tr class="lead">
			<td>Horário</td>
			<td>CTR</td>
			<td>Aluno</td>
			<td>Módulo</td>
			<td>Aula</td>
			<td>Marcar</td>
			<td>Finalizar</td>
		</tr>
	<?php
	
	while($res = mysql_fetch_assoc($exeqr))
	{
		$primeiroHorario = $res['primeiroHorario'];
		$ultimoHorario = $res['ultimoHorario'];
		$qtdHorario = $ultimoHorario-$primeiroHorario;
		
		$queryHistorico = "SELECT hora,ctr,aluno,professor FROM historicoreposicao WHERE professor = '$professor'";
		$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
		for($i=0;$i<=$qtdHorario;$i++)
		{
				echo '<tr>';
					echo '<td>';
						$ate = $res['primeiroHorario']+1;
						$horaReposicao = $res['primeiroHorario'];
						echo $horaReposicao.':00'.' as '.$ate.':00';
						
					echo '</td>';
					echo '<td>';
						$queryHistorico = "SELECT ctr,hora,aluno,professor,dia FROM historicoreposicao WHERE professor = '$professor' && hora = '$horaReposicao'";
						$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
						while($resHistorico = mysql_fetch_assoc($exeqrHistorico))
						{
							echo $resHistorico['ctr'];
						}
					echo '</td>';
					echo '<td>';
						$queryHistorico = "SELECT ctr,hora,aluno,professor,dia FROM historicoreposicao WHERE professor = '$professor' && hora = '$horaReposicao'";
						$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
						while($resHistorico = mysql_fetch_assoc($exeqrHistorico))
						{
							echo $resHistorico['aluno'];
						}
					echo '</td>';
					echo '<td>';
						$queryHistorico = "SELECT ctr,hora,aluno,professor,dia,modulo FROM historicoreposicao WHERE professor = '$professor' && hora = '$horaReposicao'";
						$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
						while($resHistorico = mysql_fetch_assoc($exeqrHistorico))
						{
							echo $resHistorico['modulo'];
						}
					echo '</td>';
					echo '<td>';
						$queryHistorico = "SELECT aula FROM historicoreposicao WHERE professor = '$professor' && hora = '$horaReposicao'";
						$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
						while($resHistorico = mysql_fetch_assoc($exeqrHistorico))
						{
							echo $resHistorico['aula'];
						}
					echo '</td>';
					echo '<td>';
					
					$queryVerfDisp = "SELECT hora,professor FROM historicoreposicao WHERE hora = '$res[primeiroHorario]' && professor = '$professor'";
					
					$execQrVerifDisp = mysql_query($queryVerfDisp);
					
					$tabelaVerifDisp = mysql_num_rows($execQrVerifDisp);
					
					if($tabelaVerifDisp > 0){
						?>
							<img src="img/block.png" alt="Não Disponível" title="Não Disponível" class="img-responsive"/>
						<?php
						$deptoUsuario	=	$_SESSION['depto'];
						$permissaoUsuario	=	$_SESSION['nivel'];
						
						
							?>
							</td>
							<td>
							<?php
							include 'includes/reposicoes/0permissoes-reposicao/permissaoDepto.php';
					}else{								
					
						?>
						
						<input type="hidden" name="marcar" value="<?php 
						
						include 'includes/reposicoes/SESSIONS_REPO.php';
						
						echo $_SESSION['horaRepo'];
						
						?>">
						<input type="hidden" name="professorM" value="<?php echo$professor?>">
							<input type="image" src="img/agendar.png" title="agendar para as <?php echo $res['primeiroHorario']?>:00" alt="agendar" data-toggle="modal" data-target="#modalCadRepo">
						<!-- Modal para Agendar o Treinamento -->

						<div class="modal fade" id="modalCadRepo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
							<form id="cadastrarReposicao" name="cadastrarReposicao" method="post" action="includes/reposicoes/addReposicao.php">
								<div class="modal-content">
								<div class="modal-header text-center">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h2 class="modal-title">Informa&ccedil;&otilde;es Obigat&oacute;rias</h2>
									<h4 class="modal-title" id="myModalLabel">Reposição para: <?php echo $professor?></h4>
								</div>
								<div class="modal-body">
								<?php
									include 'modalCadRepo.php';
								?>
								</div>
								<div class="modal-footer">
									<input type="submit" value="Cadastrar este Horário" class="btn btn-success">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
								
								</div>
								</div>
								</form>
							</div>
						</div>
						<?php
					}
					echo '</td>';
				echo '</tr>';
		$res['primeiroHorario']++;		
		}
		
	}
	
}
?>
</table>
</div>