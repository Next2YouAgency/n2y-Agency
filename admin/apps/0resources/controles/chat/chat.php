<?php
	require("config/config.php");
	$chat = new Chat();
	
	switch($_POST['acao']){
		case 'inserir':
			$chat->excluir();
			$chat->setNome($_COOKIE['nome']);
			$chat->setMensagem(filter_input(INPUT_POST,'mensagem'));
			if($chat->inserir()){
				printf('<p class="bg-primary eu pull-right">[%s] - %s</p><br>', $chat->getNome(), $chat->getMensagem());
			}
		break;
		
		case 'atualizar':
			foreach($chat->listar() as $v){
				$ativo = ($v['nome'] == $_COOKIE['nome'])? 'class="bg-primary eu pull-right"' : 'class="bg-warning ele pull-right;"';
				printf('<br><p %s> %s Disse: " %s "</p><br>', $ativo, $v['nome'], $v['mensagem']);
			}
		break;
	}