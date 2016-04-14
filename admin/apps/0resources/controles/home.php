<?php
	require 'cnf/config.php';
	
	session_start();
	
	if(!isset($_SESSION['usuario']) AND !isset($_SESSION['senha'])){
		echo('<meta http-equiv="refresh" content="0;index.php"/>');
		exit;
	} 
	else  {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SSCHOOL - Sua escola Com organização</title>
	<!--CSS-->
	<link href="css/estilo.css" rel="stylesheet" type="text/css" />
	<!--FIM CSS-->
	<!--BOOTSTRAP-->
	<link href="js/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!--FIM BOOTSTRAP-->
	<!--APOSTILAS E PROFESSORES-->
	<script type="text/javascript" src="js/apostila.js"></script>
	<script type="text/javascript" src="js/cadastrarProfessor.js"></script>
	<!--FIM APOSTILAS E PROFESSORES-->
</head>

<body>
	<header class="navbar-wrapper">
		<div class="container-fluid">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
					</div>
					
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class=""><a href="home.php">Home</a></li>
							<!--Apostilas-->
							<li class="dropdown">
							<a href="home.php?url=apostilas">Apostilas</a>
							<ul class="dropdown-menu">
								<li><a href= title="Relatório: Total de Apostilas">Relatório</a></li>
							</ul>
							</li>
							<!--Treinamentos-->
							<li class="dropdown">
							<a href="home.php?url=treimanentos" title="Relatório de Agendamentos">Treinamentos</a>
							</li>
							<!--Reposições-->
							<li class="dropdown">
							<a href="home.php?url=reposicoes" title="Reposições agendadas">Reposições</a>
							</li>
							<!--Boletins-->
							<li class="dropdown">
							<a href="home.php?url=boletins" title="Reposições agendadas">Boletins</a>
							</li>
							<!--Preventivos-->
							<li class="dropdown">
							<a href="home.php?url=relatorioPreventivo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Preventivos <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="home.php?url=cadastrarPreventivo" title="Cadastrar Novos">Cadastrar</a></li>
								<li><a href="home.php?url=relatorioPreventivo" title="Relatório de Todos">Relatório</a></li>
							</ul>
							</li>
							
							<!--Visitas Street-->
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Visitas Street<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="home.php?url=cadVisitaStreet" title="Cadastrar Visitas">Cadastrar</a></li>
								<li><a href="home.php?url=relVisitaStreet" title="Relatório de todas as Visitas">Relatórios</a></li>
							</ul>
							</li>
							
							<!--Visitas TeleMarketing-->
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Visitas TeleMarketing
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="home.php?url=relVisitaTele" title="Relatório de todas as Visitas">Relatórios</a>
								</li>
								<li>
									<a href="home.php?url=cadaVisitaTele" title="Cadastrar Agendamento">Agendamento</a>
								</li>
							</ul>
							</li>
							
							<li style="color:rgba(255,255,255,0.7)" class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Funcionário: <?php echo resumo($_SESSION['nome'],10);?>
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center btn" >
									<a href="#">
									</a>
								</li>
								
								<li class="col-md-6 col-lg-6 col-sm-6 col-xs-6" style="float:left">
									<a href='includes/logoff.php' title="Fazer LogOff" onclick="javascript:alert('Saindo...')" style="float:left;">
										<img src="img/logoff.png" class="img-responsive">
									</a>
								</li>
								<li  class="col-md-6 col-lg-6 col-sm-6 col-xs-6" style="float:left">
									<!-- Button trigger modal -->
									<button type="button" title="Mudar a senha" style="float:left;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
										<img src="img/senha.png" class="img-responsive">
									</button>
									
									
								</li>
								
							</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<section class="container-fluid" id="principal">
		
		<?php
			$url = $_GET['url'];
			
			switch($url){
				#Apostilas#
				case 'apostilas':include 'includes/apostilas/index.php';
				break;
				#BOLETINS#
				case 'boletins':include 'includes/0boletimEscolar/index.php';
				break;
				#Treinamentos#
				case 'treimanentos':include 'includes/treinamentos/index.php';
				break;
				case 'agendar':include 'includes/treinamentos/marcarTreinamento.php';
				break;
				#Reposições#
				case 'reposicoes':include 'includes/reposicoes/index.php';
				break;
				case 'relatorioReposicao':include 'includes/reposicoes/relatorioReposicao.php';
				break;
				
				case 'reposicaoImprimir':include 'includes/reposicoes/reposicaoImprimir.php';
				break;
				
				#Fim Reposições#
				#Preventivos#
				case 'relatorioPreventivo':include 'includes/preventivos/index.php';
				break;
				case 'cadastrarPreventivo':include 'includes/preventivos/cadastrar.php';
				break;
				#Fim Preventivos#
				#Visitas Street#
				case 'relVisitaStreet':include 'includes/visitasStreet/index.php';
				break;
				case 'cadVisitaStreet':include 'includes/visitasStreet/relarorios.php';
				break;
				#Fim Visitas Street#
				#Visitas TeleMarketing
				case 'cadaVisitaTele':include 'includes/visitasTele/index.php';
				break;
				case 'cadaVisitaTele':include 'includes/visitasTele/relatorios.php';
				break;
				#Fim Visitas TeleMarketing#
				#Alterar Situação Funcionário#
				case 'alterarSituacao': include 'includes/alterarSituacao.php';
				break;
				#Fim Alterar Situação Funcionário#
				
				default:include'vazio.php';
			}
		?>
	</section>
	<div class="clearfix"></div>
	<footer class="footer bg-primary col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<?php
			//include'chat/index.php';
		?>
		</div>
	</footer>
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Alterar a Senha do Usuário: <?php echo $_SESSION['nome']?></h4>
			</div>
			<div class="modal-body">
			<form action="alteradoSenha.php" method="post">
			<?php
				include 'alterarSenha.php';
			?>
			</div>
			<div class="modal-footer">
				<input type="submit" value="Salvar Senha" class="btn btn-success">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	}
?>