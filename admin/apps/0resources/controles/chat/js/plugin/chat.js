$(function(){
	//Inserir no chat
	$("#submit").click(function(){
		msg	=	$("#mensagem").val();
		if(msg.trim() != ''){
			$.post('chat.php',
			{
				mensagem	: msg,
				acao		: 'inserir'
			}, function(retorno){
				$("#painel").append(retorno);
				$("$mensagem").val('');
			});
		}
	});
	//Atualizar o chat
	setInterval(function(){
		$.post('chat.php',
		{
			acao : 'atualizar'	
		},function(retorno){
			$("#painel").html(retorno);
		});
	},500);
	
	
});