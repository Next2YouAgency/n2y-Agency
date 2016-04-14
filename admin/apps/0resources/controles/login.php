<?php
#########Configurações do Sistema ##########
	require 'cnf/config.php';
##########################################
#			Dados do Usuário			 #
$usuario =	$_POST["login"];
$senha = 	md5($_POST["senha"]);
##########################Verificar Usuário no banco#############################################
$verificarLogin		=	mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'")or die(mysql_error());
$linhasLogin		=	mysql_fetch_assoc($verificarLogin);
$colunasLogin		=	mysql_fetch_array($verificarLogin);
##################################################################################################
##############################Criação da Seção de login ##########################################

	if($linhasLogin > 0){
		session_start();
		$_SESSION['usuario']=	$linhasLogin['usuario'];
		$_SESSION['senha']	=	$linhasLogin['senha'];
		$_SESSION['nome']	=	$linhasLogin['nome'];
		$_SESSION['depto']	=	$linhasLogin['departamento'];
		$_SESSION['nivel']	=	$linhasLogin['nivel'];
		$_SESSION['uLogin']	=	$linhasLogin['ultimo_login'];
		
		?>
			<script>
				alert("Usuário Logado");
			</script>
			Último Login: <?php $_SESSION['uLogin']?>
			<meta http-equiv="refresh" content="0;home.php"/>
			
		<?php		
		
	}else{
		?>
		<script>
			alert("Algo errado não está certo");
		</script>
		<meta http-equiv="refresh" content="0;index.php">
		<?php
	}

?>