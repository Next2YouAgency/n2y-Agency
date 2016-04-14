<?php
	require '../../cnf/config.php';
	
	
	
	$professor = $_POST['escolhaProfessor'];
	$marcar = $_GET[marcar];
	$professorM = $_GET[professorM];
?>


	<a href="../../home.php?url=reposicoes"><span class="btnVoltarPainel">Voltar para o Painel</span></a>
	<?php
		if($professor == "")
		{
			
		}else{
			
		
	?>
	<div id="profHorarios">
		<h3>Horarios do professor: <?php echo $professor; ?></h3>
		<table border="1" align="center">
			<tr>
				<td>Horário</td>
				<td>CTR</td>
				<td>Aluno</td>
				<td>Módulo</td>
				<td>Aula</td>
				<td>Marcar</td>
			</tr>
			<?php
			$query = "SELECT nomeProfessor,primeiroHorario,ultimoHorario FROM professores WHERE nomeProfessor = '$professor'";
			$exeqr = mysql_query($query) or die (mysql_error());
	
			if(mysql_num_rows($exeqr) <= 0)
			{
			
			}else{
				
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
									$queryHistorico = "SELECT aula FROM historicoreposicao WHERE professor = '$professor' && hora = '$horaReposicao' && dia = '08/08/2014'";
									$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
									while($resHistorico = mysql_fetch_assoc($exeqrHistorico))
									{
										echo $resHistorico['aula'];
									}
								echo '</td>';
								echo '<td>';
								
								$queryVerificarDisponibilidade = mysql_query("SELECT * FROM historicoreposicao WHERE hora = $horaReposicao && dia = $diaReposicao ") or die(mysql_error());
								$execQrVerfificarDisponibilidade = mysql_num_rows($queryVerificarDisponibilidade);

								if($execQrVerfificarDisponibilidade > 0){
									echo'
										N / D
									';
								}else{
									echo '<a href="testeReposicao.php?marcar='.$res['primeiroHorario'].'&professorM='.$professor.'">Marcar</a>';
								}
								
									
								echo '</td>';
							echo '</tr>';
					$res['primeiroHorario']++;		
					}
					
				}
				
			}
			?>
		</table>
		
	<?php
	}
	?>
	<?php
			if($marcar == "")
			{
				
			}else{
			
				$funcionario = $_SESSION["login"];
				date_default_timezone_set('UTC');
				$dataM = date("d/m/Y");
				$addCtr = $_POST['ctrAluno'];
				$addAluno = $_POST['nomeAluno'];
				$diaReposicao = $_POST['diaReposicao'];
				$addModulo = $_POST['moduloC'];
					
				?>
				<div id="marcarReposicao" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h2 style="font:25px bolder;">Cadastrar reposicão</h2>
						<p class="lead"><?php echo $funcionario ?></p>
						<form id="cadastrarReposicao" name="cadastrarReposicao" method="post" action="addReposicao.php">
						<table border="1" align="center">
							<tr>
								<td class="colunaEsquerda">CTR</td>
								<td><input type="text" id="ctrAluno" name="ctrAluno" /></td>
							</tr>
							<tr>
								<td class="colunaEsquerda">Nome do aluno</td>
								<td><input type="text" id="nomeAluno" name="nomeAluno" /></td>
							</tr>
							<tr>
								<td class="colunaEsquerda">Módulo</td>
								<td><input type="text" id="moduloC" name="moduloC" /></td>
							</tr>
							<tr>
								<td class="colunaEsquerda">Aula</td>
								<td><input type="text" id="aulaModulo" name="aulaModulo" /></td>
							</tr>
							<tr>
								<td class="colunaEsquerda">Dia da Reposição</td>
								<td><input type="text" id="diaReposicao" name="diaReposicao" /></td>
							</tr>
							<tr>
								<td class="colunaEsquerda"><input type="submit" id="enviaReposicao" name="enviaReposicao" /></td>
								<td>
									<input type="hidden" value="<?php echo $marcar?>" id="horaReposicao" name="horaReposicao" >
									<input type="hidden" value="<?php echo$professorM?>" id="profReposicao" name="profReposicao"  >
								</td>
							</tr>
						</table>
					</form>
				</div><!--marcarReposicao-->
				<?php
			}
		?>
</body>
</html>