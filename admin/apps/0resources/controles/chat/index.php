<?php
	//Limeza do cookie setcookie('nome', '',time()-3600*24);
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nome = trim(filter_input(INPUT_POST,'nome'));
		if(empty($nome)){
			$erro = 'Nome é Obrigatório';
		}else{
			require("config/config.php");
			$chat = new Chat();
			$chat->setNome($nome);
			if($chat->existeNome()){
				$erro = 'Já existe alguém usando esse nome';
			}else{
				setcookie('nome', $chat->getNome(),time()+3600*24*TEMPO_LIMITE);
				header('location:chat-index.php');
			}
		}
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Entrando no Sistema</title>
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
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div name="conteudo_principal" class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-center bg-info" style="margin-top:150px">
        <h1>Entre no chat</h1>
        
        <?php
			if(isset($erro)){
				printf('<p id="erro">$s</p>',$erro);
			}
		?>
        
        <form action="" method="post" id="frm-login">
        <?php if(isset($_COOKIE['nome'])):?>
        	<a href="chat-index.php">Continuar como <strong><?php echo $_COOKIE['nome'];?></strong></a>
		<?php endif;?>
            <fieldset>
            	<div name="grupo1" class="form-group">
                    <label>
                        <span>Nome:</span>
                        <input type="text" name="nome" id="nome" class="form-control" />
                    </label>
                </div>
                <input type="submit" class="btn" value="entrar" />
            </fieldset>
        </form>
    </div>
    </body>
</html>