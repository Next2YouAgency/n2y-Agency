<?php
	session_start();
	$usuario	=	$_SESSION['usuario'];
	$senha		=	$_SESSION['senha'];
	session_destroy();
?>
<!doctype html>
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
	</head>
	
	<body>
		<section id="container-fluid" style="margin-top:15%;">
		
			<form action="login.php" method="post">
				<div class="form-group">
					<div class="col-sm-4 col-xs-4 col-lg-4" style="text-align:right">
						<label for="login">Login</label>
					</div>
					<div class="col-sm-6 col-xs-6 col-lg-6">
						<input type="text" class="form-control" id="login" name="login" placeholder="Login" autofocus>
						<span><?php echo $usuario?></span>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4 col-xs-4 col-lg-4" style="text-align:right">
						<label for="senha">Senha</label>
					</div>
					<div class="col-sm-6 col-xs-6 col-lg-6">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					</div>
				</div>
				<div class="form-group" style="top:20px;position:relative">
					<div class="col-sm-12 col-xs-12 col-lg-12" style="text-align:center">
						<button type="submit" class="btn btn-default btn-success">Login</button>
					
						<button type="reset" class="btn btn-default btn-primary">Apagar Dados</button>
					</div>
				</div>
			</form>
		</section>
	</body>
</html>