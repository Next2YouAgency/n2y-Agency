<?php
	require_once 'appCnf/config.php';
	ob_start();
	session_start();
	
	if(!empty($_SESSION['user'])){
		header('Location: apps');
	}
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>N2Y - Sua Solução para Web</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/logotipo/favicon.ico" type="image/icon">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style rel="stylesheet" media="all">
			.roundedComponent{
				background:#fff;
				padding:0px 50px;
				border-radius:10px;
				margin-top:10px;
			}
		</style>
		</style>
		<!--AJAX de verificação do tipo de pessoa-->
		<script type="text/javascript" src="js/verificar_pessoa.js"></script>
		
		<!--AJAX de trocas de informações-->
		<script type="text/javascript" src="js/switches/switch_pessoal.js"></script>
		<script type="text/javascript" src="js/switches/switch_pessoal_parts.js"></script>
		<script type="text/javascript" src="js/modalsInter.js"></script>
		<?php include_once 'parts/classesBS.php'?>
	</head>
	<body style="background:rgba(0,0,0,.7)">
		<section class="<?php echo $xs[9],' ',$sm[9],' ',$md[7],' ',$lg[7],' ',$push_xs[0],' ',$push_sm[0],' ',$push_md[1],' ',$push_lg[1]?>">
			<div class="<?php echo $xs[5],' ',$sm[5],' ',$md[5],' ',$lg[5],' ',$push_xs[2],' ',$push_sm[2],' ',$push_md[2],' ',$push_lg[2]?>">
				<img src="img/logotipo.png" class="img-responsive" alt="Sistemas de Gerenciamento N2 - O controle de sua empresa ao seu alcance" title="Sistemas de Gerenciamento N2 - O controle de sua empresa ao seu alcance">
			</div>
			
			<?php
			if(isset($_POST['btnLogin'])){
				$usuario['user']	=	mysql_real_escape_string($_POST['usuario']);
				$usuario['pass']	=	mysql_real_escape_string($_POST['senhaUser']);
				$usuario['lembrar']	=	mysql_real_escape_string($_POST['lembrar']);
				
				if(!$usuario['user']){
					echo 'Usuário não pode ficar vazio, tente novamente';
				}else{
					$usuarioAuth	=	md5($usuario['user']);
					$senhaAuth		=	md5($usuario['pass']);
					
					$readDataBase	=	read('usuarios',"WHERE user_cript = '$usuarioAuth'");
					//$readAppBlog	=	read('usuarios_blog',"WHERE user_cript = '$usuarioAuth' && senha_acesso_cliente= '$senhaAuth'");
					
					if($readDataBase){
						foreach($readDataBase as $readLogin);
						
						if($readLogin['user_cript'] == $usuarioAuth && $readLogin['senha_cript'] == $senhaAuth){
							//Verificar se o usuário Solicitou Lembrar usuáro
							if($usuario['lembrar']){
								//Criar Cookie
								$cookiesalva	=	base64_encode($usuario['user']).'&'.base64_encode($usuario['pass']);
								setcookie('autUser',$cookiesalva,time()+60*60,'/');
							}else{
								//Limpar Cookie
								setcookie('autUser','',time()-3600,'/');
							}
							
							session_start();
							$_SESSION['user']	=	$readLogin;
							header('Location: '. $_SERVER['PHP_SELF']);
						}else{
							echo 'A senha não confere com o usuário';
						}
					}else{
						echo 'O usuário não existe no sistema. Faça seu cadastro!';
					}
				}
			}elseif(!empty($_COOKIE['autUser'])){
				$cookie				=	$_COOKIE['autUser'];
				$cookie				=	explode('&',$cookie);
				$usuario['user']	=	base64_decode($cookie[0]);
				$usuario['pass']	=	base64_decode($cookie[1]);
				$usuario['lembrar']	=	1;
			}
			if(!empty($_GET['ativar'])=="y"){
				include_once 'parts/cadastro/concluirCadastroCliente.php';
			}elseif(isset($_GET['esqueciSenha'])){
				include_once 'parts/esqueciSenha.php';
			}else{
				include_once 'parts/loginUsuario.php';
				include_once 'parts/modalCadastro.php';
			}
			?>
		</section>
	</body>
</html>
<?php ob_end_flush();?>