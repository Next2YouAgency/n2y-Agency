<?php	
	$professor = $_POST['escolhaHorarios'];
	$marcar = $_GET[marcar];
	$professorM = $_GET[professorM];
	$res = $_GET['escolhaHorariosTreinamento'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SSCHOOL - Sua escola Com organização</title>
	<!--CSS-->
	<link href="../../css/estilo.css" rel="stylesheet" type="text/css" />
	<!--FIM CSS-->
	<!--BOOTSTRAP-->
	<link href="../../js/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
	<!--FIM BOOTSTRAP-->
	<!--APOSTILAS E PROFESSORES-->
	<script type="text/javascript" src="../../js/apostila.js"></script>
	<script type="text/javascript" src="../../js/cadastrarProfessor.js"></script>
	<!--FIM APOSTILAS E PROFESSORES-->
</head>

<body>
	<div id="painelApostilas" class="col-xs-8 col-xs-push-2 col-sm-8 col-sm-push-2 col-md-8 col-md-push-2 col-lg-8 col-lg-push-2">
		<form id="formProf" name="formProf" method="post">
			<div class="form-group text-center">
			<label class="lead"><h2>Escolha o Horário: </h2></label>
				
				<?php
				$consultaHorarios = 'SELECT * FROM horarios';
				$visualizaHorarios = mysql_query($consultaHorarios) or die(mysql_error());
				if(mysql_num_rows($visualizaHorarios) <= 0)
				{
					echo 'Sem professores cadastrados';
				}
				?>
				<select name="escolhaHorarios" id="escolhaHorarios" class="form-control">
				<?php
				while($res = mysql_fetch_assoc($visualizaHorarios))
				{
					?>
					<option value="<?php echo $res['horario']?>" id="escolhaHorariosTreinamento" name="escolhaHorariosTreinamento"><?php echo $res['horario']?></option>
					<?php
				}
				?>
				</select>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:10px"></div>
				<input type="submit" value="Buscar" class="btn btn-primary"/>
			</div>
		</form>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
	</div><!--painelApostilas-->
	<?php
		if($professor == "")
		{
			
		}else{
			
		
	?>
	<div id="profHorarios" class="content-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3 class="text-center">Horarios escolhido: <?php echo $professor; ?></h3>
		<div class="col-md-1"></div>
		<table class="tabelaCadastrarTreinamento table-bordered">
			<tr class="lead">
				<td>LAB</td>
				<td>MAQ</td>
				<td>HORÁRIO</td>
				<td>CTR</td>
				<td>ALUNO</td>
				<td>TIPO</td>
			</tr>
			<tr>
			<?php
			$queryLab = "SELECT * FROM labs";
			$exeqrLab = mysql_query($queryLab) or die (mysql_error());
			
			$queryMaq = "SELECT * FROM maq";
			$exeqrMaq = mysql_query($queryMaq) or die (mysql_error());
			
			$queryTipo = "SELECT * FROM tipo";
			$exeQrTipo = mysql_query($queryTipo) or die (mysql_error());
			
			if(mysql_num_rows($exeqrMaq) <=7)
			{
				?>
					<form id="cadastrarTreinamento" method="post" action="includes/treinamentos/cadastrarTreinamento.php">
					<td>
						<select name="lab">
				<?php 
					while($resultadoQrLab = mysql_fetch_array($exeqrLab)){
						$lab = $resultadoQrLab['nome'];
						
						?>
							<option value="<?php echo $lab?>"><?php echo $lab?></option>
						<?php
					}
					?>
					</select>
					</td>
					<td>
					<select id="maq" name="maq">
				<?php 
				while($resultadoQrMaq = mysql_fetch_array($exeqrMaq)){
					$maq = $resultadoQrMaq['maq'];
					
					?>
					
						<option value="<?php echo $maq?>"><?php echo $maq?></option>
					
					<?php
				}
				?>
					</select>
				</td>
				<td>
				<?php echo $professor?>
					<input type="hidden" value="<?php echo $professor?>" id="horario" name="horario">
				</td>
				<td>
					<input type="text" id="ctr" name="ctr" placeholder="CTR do Aluno">
				</td>
					
				<td>
					<input type="text" id="aluno" name="aluno" placeholder="Nome do Aluno">
				</td>
				<td>
				<select name="tipo">';
				<?php
				while($resultadoQrTipo = mysql_fetch_array($exeQrTipo)){
					$tipoSexta = $resultadoQrTipo['tipo'];
					
					?>
						<option value="<?php echo $tipoSexta?>"><?php echo $tipoSexta?></option>
					<?php
				}
				?>
				</select>
				</td>
				</tr>
				</table>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top:15px">
					<input type="submit" value="cadastrar" class="btn btn-primary">
					<a href="../../home.php?url=treimanentos" class="btn btn-danger">Cancelar</a>
				</div>
				</form>
				<?php
			}else{
				
				while($res = mysql_fetch_array($exeqrMaq))
				{
					$maq = $res['maq'];
							echo '<tr>';
								echo '<td>';
									$horaReposicao = $res['maq'];
									echo '
										<select>
										<option value="'.$horaReposicao.'">'.$horaReposicao.'</option>
										</select>
									';
									
								echo '</td>';
								echo '<td>';
									
										echo $professor;
									
								echo '</td>';
								echo '<td>';
									$queryHistorico = "SELECT ctr,hora,aluno,professor,dia FROM historicoreposicao WHERE professor = '$professor' && hora = '$horaReposicao' && dia = '08/08/2014'";
									$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
									while($resHistorico = mysql_fetch_assoc($exeqrHistorico))
									{
										echo $resHistorico['aluno'];
									}
								echo '</td>';
								echo '<td>';
									$queryHistorico = "SELECT ctr,hora,aluno,professor,dia,modulo FROM historicoreposicao WHERE professor = '$professor' && hora = '$horaReposicao' && dia = '08/08/2014'";
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
									echo '<a href="testeReposicao.php?marcar='.$res['primeiroHorario'].'&professorM='.$professor.'">Marcar</a>';
								echo '</td>';
							echo '</tr>';
					
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
					
				echo '<div id="marcarReposicao">
						<p>Cadastrar reposicão</p>';

					
					
						
				echo '<form id="cadastrarReposicao" name="cadastrarReposicao" method="post" action="addReposicao.php">
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
									<input type="hidden" value="'.$marcar.'" id="horaReposicao" name="horaReposicao" >
									<input type="hiden" value="'.$professorM.'" id="profReposicao" name="profReposicao" >
								</td>
							</tr>
						</table>
					</form>
				</div><!--marcarReposicao-->';
			}
		?>
</body>
</html>