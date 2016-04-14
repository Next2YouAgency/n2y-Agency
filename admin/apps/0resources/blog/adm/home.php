<?php
	require 'cnf/config.php';
	
	session_start();
	if((!isset ($_SESSION["email"]) == true) and (!isset ($_SESSION["senha"]) == true))
	{
		unset($_SESSION["email"]);
		unset($_SESSION["senha"]);
		?>
		<script>alert("Usuário não conectado ou sessão expirada.\nFaça Login novamente!");</script>
		<meta http-equiv="refresh" content="0;index.php" >
		<?php
	}else{

$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>N2 - Painel de Administra&ccedil;&aacute;o</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	
	<!--EDITOR DE TEXTOS EM JQUERY-->
	<link type="text/css" rel="stylesheet" href="editorTextos/demo.css">
	<link type="text/css" rel="stylesheet" href="editorTextos/jquery-te-1.4.0.css" charset="utf-8">
	<script type="text/javascript" src="editorTextos/jquery-te-1.4.0.js" charset="utf-8"></script>
	<!--EDITOR DE TEXTOS EM JQUERY-->
	<link href="../css/estiloPrincipal.css" rel="stylesheet">
	<link rel="shortcut icon" href="../img/favicon.png">
	</head>
	<body>
	<section class="container-fluid">
  
	<?php include 'content_adm/header.php';?>
	
		<?php 
		if(isset($_GET['url'])){
			$url	=	$_GET['url'];
			
			switch($url){
				case 'home': include 'pages_adm/homeContent.php';break;
				#desenvolvimento web
				case 'design':include'pages_adm/designContent.php';break;
				case 'front-end':include'pages_adm/frontEndContent.php';break;
				case 'back-end':include'pages_adm/backEndContent.php';break;
				case 'searchEngineOptimization':include'pages_adm/seoContent.php';break;
				case 'orientedObjectProgramming':include'pages_adm/oopContent.php';break;
				#gestão empresarial
				case 'adm':include'pages_adm/gestao/admContent.php';break;
				case 'contabil':include'pages_adm/gestao/contabilContent.php';break;
				case 'secretario':include'pages_adm/gestao/secretarioContent.php';break;
				case 'dp':include'pages_adm/gestao/dpContent.php';break;
				case 'publicar' : include'pages_adm/publicar.php';
			}
		}else{
			
			
			include 'pages_adm/homeContent.php';
		}
		
		?>
	</section>
	
	<?php include 'content_adm/footer.php';?>
	</section><!--final do conteudo-->
	</body>
</html>
<?php 
	}
?>