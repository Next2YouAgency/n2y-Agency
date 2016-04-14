<?php 
	require 'cnf/define.php';
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RPG Sem nome</title>
		
		<!--BOOTSTRAP-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!--FIM BOOTSTRAP-->
		<!--CSS Padrão-->
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<!-- INICIO DO CONTEÚDO -->
		<section class="container-fluid" style="padding:0">
			<header class="navbar-wrapper">
				<div class="container-fluid" style="padding:0">
					<?php include_once'parts/menu.php';?>
				</div>
			</header>
			
			<section id="principal" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:50px;">
			<?php
				$url	=	$_GET['url'];
				
				switch($url){
					
					case 'logarUsuario':	include_once 'parts/pages/login.php';
					break;
					
					case 'guia_player':	include_once 'parts/pages/guia_player_index.php';
					break;
					
					case 'guiaNovato':	include_once 'parts/pages/guiaNovato.php';
					break;
					
					case 'regras_combate':	include_once 'parts/pages/regras_combate.php';
					break;
					
					case 'noticias_on':	include_once 'parts/pages/noticias_on.php';
					break;
					
					case 'noticias_off':	include_once 'parts/pages/noticias_off.php';
					break;
					
					case 'bestiario':	include_once 'parts/pages/bestiario.php';
					break;
					
					default: include_once 'updates.php';
					
				}
			?>
			</section>
		</section>
		<!-- FIM DO CONTEÚDO -->
	</body>
<html>