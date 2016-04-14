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
		<link href="../css/estiloPrincipal.css" rel="stylesheet">
		<link rel="shortcut icon" href="../img/favicon.png">
	</head>
	<body>
		<section class="container-fluid">
			<div class="col-md-2"></div>
			<article class="col-md-8">
				<form action="login_usuarios.php" method="post" class="form-control" style="margin-top:20%;min-height:300px">
					<div class="form-group">
						<h2 class="col-md-12">Painel de Administra&ccedil;&atilde;o NeO nErD</h2>
					</div>
					<div class="form-group">
						<label for="emailUsuario">Email address</label>
						<input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="senhaUsuario">Password</label>
						<input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="Senha">
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" value="logado"> Manter Logado
						</label>
					</div>
					<br>
					<div class="form-group">
						<input type="submit" class="btn btn-info" value="Login" style="float:left; margin-top:-3%">
						<p class="lead" style="float:left; margin-top:-3%">Ainda n&atilde;o tem cadastro? <a href="cadastrarUsuario.html" id="cadastrarUsuarioNovo">Clique aqui.</a></p>
					</div>
					
				</form>
				<div style="clear:both;"></div>
			</article>
			<div class="col-md-2"></div>
		</section>
	</body>
</html>