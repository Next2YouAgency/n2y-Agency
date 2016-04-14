<?php
	include 'cnf/config.php';
	
	$emailUsuario	=	$_POST['emailUsuario'];
	$senhaUsuario	=	md5($_POST['senhaUsuario']);
	
	$verificarLogin	=	mysql_query("SELECT * FROM usuarios WHERE email = '$emailUsuario' AND senha = '$senhaUsuario' ")or die(mysql_error());
	
	$linhasLogin		=	mysql_num_rows($verificarLogin);
	$colunasLogin		=	mysql_fetch_array($verificarLogin);
	
	if($linhasLogin > 0){
		session_start();
		$_SESSION["email"]	=	$emailUsuario;
		$_SESSION["senha"]	=	$senhaUsuario;
		
		$_SESSION["nome"]		=	$colunasLogin['nome'];
		$_SESSION["email"]		=	$colunasLogin['email'];
		$_SESSION["nivel"]		=	$colunasLogin['nivel'];
		$_SESSION["twitter"]	=	$colunasLogin['twitter'];
		$_SESSION["facebook"]	=	$colunasLogin['facebook'];
		$_SESSION["youtube"]	=	$colunasLogin['youtube'];
		$_SESSION["whats"]	=	$colunasLogin['whats'];
		
		
		
		echo'
			<script>alert("Usuário Conectado!")</script>
			<meta http-equiv="refresh" content="0;home.php">
		';
	}else{
		echo'
			<script>alert("Usuário ou senha Inválidos!")</script>
			<meta http-equiv="refresh" content="0;index.php">
		';
	}
?>