<?php
	include 'auth.php';
	require 'config/config.php';
	$chat = new Chat();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sistema Integrado Social</title>
        <!--BOOTSTRAP-->
        <link href="js/bootstrap.min.css" rel="stylesheet">
        <link href="css/pessoal.css" rel="stylesheet">
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
        <script src="js/plugin/chat.js"></script>
        <!--FIM BOOTSTRAP-->
    </head>
    
    <body>
	<div class="content-fluid">
    <h1 class="text-center">Bem vindo ao nosso chat</h1>
    <p class="text-center text-success">
	    Nome de Usuário: <strong><?php echo $_COOKIE['nome'];?></strong>
    </p>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div name="painel_chat" id="painel" class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-center bg-info" style="margin-top:20px;max-height:390px; overflow-x:auto;">
    
    <?php
		foreach($chat->listar() as $v){
			$ativo = ($v['nome'] == $_COOKIE['nome'])? 'class="bg-primary eu pull-right"' : 'class="bg-warning ele pull-left;"';
			printf('<br><p %s> %s Disse: " %s "</p><br>', $ativo, $v['nome'], $v['mensagem']);
		}
	?>
    
    </div>
    
    
    <div name="box_digitar" id="digitar" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center bg" style="margin-top:20px">
    	<form action="" method="post" id="frm-msg">
			<div class="form-group">
            	<label>
                	<span>Mensagem:</span>
                    <input name="mensagem" id="mensagem" class="form-control">
                </label>
            </div>
            <div class="form-group">
            	<input type="submit" id="submit" value="Enviar" />
            </div>
        </form>
    </div>
    </div>
    </body>
</html>