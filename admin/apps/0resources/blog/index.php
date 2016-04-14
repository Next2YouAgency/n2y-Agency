<?php include 'adm/cnf/config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NeO NERD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="css/estiloPrincipal.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.png">
  </head>
  <body>
  <section class="container-fluid">
  
    <?php include 'content/header.php';?>
	
	<?php include 'content/banner.php';?>
	
	<section class="principal">
	
		<?php 
		if(isset($_GET['url'])){
			$url	=	$_GET['url'];
			
			switch($url){
				case 'home':include'pages/home.php';break;
				#Dev Web#
				case 'design':include'pages/devWeb/design.php';break;
				case 'front-end':include'pages/devWeb/front-end.php';break;
				case 'back-end':include'pages/devWeb/back-end.php';break;
				case 'searchEngineOptimization':include'pages/devWeb/seo.php';break;
				case 'orientedObjectProgramming':include'pages/devWeb/oop.php';break;
				#Gestão#
				case 'adm':include'pages/gest/adm.php';break;
				case 'contabilidade':include'pages/gest/cont.php';break;
				case 'secretariado':include'pages/gest/secret.php';break;
				case 'dep_pessoal':include'pages/gest/dp.php';break;
				
				#Vídeos#
				case 'adobePremier':include'pages/videos/adobePremier.php';break;
				case 'sonnyVegas':include'pages/videos/sonnyVegas.php';break;
				case 'camtasia':include'pages/videos/camtasia.php';break;
				case 'corelVStudio':include'pages/videos/corelVStudio.php';break;
				
				#Games#
				case 'concept':include'pages/games/concept.php';break;
				case 'flashAS':include'pages/games/flashAS.php';break;
				case 'esculturas':include'pages/games/esculturas.php';break;
				case 'modelagem3D':include'pages/games/modelagem3D.php';break;
				
				#Idiomas#
				case 'englishContent':include'pages/idiomas/englishContent.php';break;
				case 'espanholContent':include'pages/idiomas/espanholContent.php';break;
				
				default:include 'error_404.php';
			}
		}else{
			include 'pages/home.php';
		}
		
		?>
	
	</section>
	
	<?php include 'content/footer.php';?>
  </section><!--final do conteudo-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>