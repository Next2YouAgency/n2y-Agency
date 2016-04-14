<?php
	require '../../cnf/config.php';
	
	session_start();
	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
		
	} 
	else  {
		}
	$modulo = $_SESSION['modulo'];
	$qtd = $_SESSION['qtd'];

?>
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
	<div class="content-fluid">
		<?php
			//pegar data e hora do computador
			date_default_timezone_set('America/Sao_Paulo');
			$data = date('d/m/Y');
			$hora = date('H:i:s');
			//Exibir no sistema a data e a hora do computador
			?>
			<h1 class="text-center">Data:<?php echo $data ?> hora:<?php echo $hora?></h1>
			<?php
			//Buscar login de usuario pela SESSION
			$usuario = $_SESSION["login"];
			//Buscar o nome do usuario no banco de dados
			$consultaFuncionario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
			$visualizaFuncionario = mysql_query($consultaFuncionario) or die(mysql_error());
			mysql_num_rows($visualizaFuncionario);
			$coluna = mysql_fetch_assoc($visualizaFuncionario);
			/*if($coluna[usuario] == $usuario)
			{
				$funcionarioNome = $coluna[nome];
			}*/
			//funcao de repetição para criar as linhas de alunos
			$funcionarioNome = $coluna[nome];
			function linhasAlunos($qtdlinhas)
			{
			
			}
			?>
			<p class="lead text-center">O funcionário <?php echo $funcionarioNome?> retirou <?php echo $qtd?> apostilas do módulo de <?php echo $modulo?> do estoque.</p>
				<p class="lead">Para serem entregues aos seguintes alunos:<p/>
				<table class="table-bordered col-md-12">
					<tr>
						<td><b>CTR</b></td>
						<td><b>Nome do Aluno</b></td>
						<td><b>Assinatura</b></td>
					</tr>
					<?php
					for($i = 0; $i < $qtd; $i++)
					{
					?>
					<tr>
						<td></td>
						<td></td>
						<td>x</td>
					</tr>
					<?php 
					}
					?>
			</table>			
			<p><b>***Obs:<b> Não esquecer de entregar para os alunos assinarem</p>
			<br/>
			<center>
				<hr>
				<?php echo $funcionarioNome ?>
				<br/><br/><br/><br/>
				<hr>
				<p>Coordenador Pedagógico</p>
			</center>
			<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
	</div><!--Content Fluid-->
	<a href="../../home.php?url=apostilas"><span class="btnVoltarPainel btn-primary col-md-3 text-center" style="padding:10px 0;">Voltar para o Painel</span></a>
</body>