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
				case 'design':include'pages/design.php';break;
				case 'front-end':include'pages/front-end.php';break;
				case 'back-end':include'pages/back-end.php';break;
				case 'searchEngineOptimization':include'pages/seo.php';break;
				case 'orientedObjectProgramming':include'pages/oop.php';break;
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