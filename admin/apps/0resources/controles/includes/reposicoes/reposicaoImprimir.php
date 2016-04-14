<?php
	session_start();
	if(empty($_SESSION['usuario']) || empty($_SESSION['senha'])) {
		header("Location:index.php");
		exit;
	} 
	else  {
		}
	date_default_timezone_set('America/Sao_Paulo');
	$aluno = $_SESSION['aluno'];
	$professor = $_SESSION['professor'];
	$diaReposicao = mktime($_SESSION['diaReposicao']);
	$horaReposicao	=	mktime($_SESSION['horaReposicao']);
	//$horaReposicao = $_SESSION['horaReposicao'];
	$addCtr = $_SESSION['addCtr'];
	$funcionario	=	$_SESSION['funcionario'];

	//pegar data e hora do computador
	$data = date('d/m/Y');
	$hora = date('H:i:s');
	
	//Buscar login de usuario pela SESSION
	$usuario = $_SESSION["login"];
	//Buscar o nome do usuario no banco de dados
	$consultaFuncionario = "SELECT * FROM usuarios WHERE usuario='$usuario'";
	$visualizaFuncionario = mysql_query($consultaFuncionario) or die(mysql_error());
	mysql_num_rows($visualizaFuncionario);
	$coluna = mysql_fetch_assoc($visualizaFuncionario);
	$funcionarioNome = $coluna[nome];
	
	$acabaReposicao = $horaReposicao+1;
	?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<p class="lead">
		Informações sobre a Reposição:
		<p><b>Data do Agendamento: </b><?php echo $data?></p>
		<p><b>Hora do Agendamento:</b><?php echo $hora?></p>
		<p><b>Funcionário:</b> <?php echo $funcionario?></p>
		<p><b>CTR: </b> <?php echo $addCtr?></p>
		<p><b>Nome do Aluno: </b><?php echo $aluno?></p>
		<p><b>Professor: </b> <?php echo $professor?></p>
		<p><b>Dia: </b> <?php echo date('d/m/Y',$diaReposicao)?></p>
		<p><b>Horário: </b><?php echo date('H',$horaReposicao)?>:00 as <?php echo date('H',$horaReposicao)+1?>:00</p>
		<input type="button" name="imprimir" class="btn btn-primary hidden-print pull-right" style="position:fixed;right:0;top:150px;"value="Imprimir" onclick="window.print();">
		<a href="home.php?url=reposicoes" class="btn btn-primary hidden-print pull-right" style="position:fixed;right:0;top:105px;">Cadastrar Nova</a>
		</div>
	</p>
	<p class="lead">Declaro estar ciente da reposição de aula no dia e horario acima.<p/>
		<table class="table-bordered table">
			<tr>
				<td><b>CTR</b></td>
				<td><b>Nome do Aluno</b></td>
				<td><b>Assinatura</b></td>
			</tr>
			<tr>
				<td><?php echo $addCtr; ?></td>
				<td><?php echo $aluno; ?></td>
				<td>x</td>
			</tr>
			
		</table>			
	<p><b>***Obs:<b> Assinatura do aluno obrigatória.</p>
	<div id="assinaturas" class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<hr style="border:1px solid #000" class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-8 col-xs-push-2">
		<p class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-8 col-xs-push-2"><?php echo $funcionario ?></p>
		<hr style="border:1px solid #000" class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-8 col-xs-push-2">
		
		<p class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-8 col-xs-push-2"><?php echo 'Coordenador Pedagógico' ?></p>
	</div>