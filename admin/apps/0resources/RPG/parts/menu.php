<nav class="navbar navbar-inverse navbar-static-top">
	<img src="img/topo.png" class="menu">
	<div class="container" style="width:100%;position:fixed;">
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
				<!--Home e Novos Players-->
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu"><a href="index.php">Home</a></li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Guia do Player <span class="caret"></span>
				<?php include_once 'guia_player_drop_down.php'?>
				</a>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Lendas<span class="caret"></span>
				<?php include_once 'lendas_drop_down.php';?>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Classes<span class="caret"></span>
				<?php include_once'classes_drop_down.php';?>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
					<a href="index.php?url=racas">Raças</a>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Treinamentos<span class="caret"></span>
				<?php include_once'treinamentos_drop_down.php'; ?>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Terras e Regiões<span class="caret"></span>
				<?php include_once'terras_regioes_drop_down.php';?>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Organizações e Guilds<span class="caret"></span>
				<?php include_once'organizacoes_guilds_drop_down.php';?>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=lojas_habilidades" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Lojas <span class="caret"></span>
				</a>
				<?php include_once'lojas_drop_down.php';?>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Escola de Magias<span class="caret"></span>
				<?php include_once'escola_magias_drop_down.php';?>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Orações<span class="caret"></span>
				<?php include_once'oracoes_drop_down.php';?>
				</li>
				<li class="dropdown col-xs-12 col-sm-2 col-md-2 col-lg-2 item_menu">
				<a href="index.php?url=guia_player" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Menu de Acesso<span class="caret"></span>
				<?php
					//session_start();
					
					if(!empty($_SESSION['usuario'])){
						include_once'status_on.php';
					}else{
						include_once'acesso_drop_down.php';
					}				
				?>
				</li>
				
				<?php
					//Fazer a estrutura de decisão para se estiver logado aparecer os status do personagem do usuário
				?>
			</ul>
		</div>
	</div>
</nav>