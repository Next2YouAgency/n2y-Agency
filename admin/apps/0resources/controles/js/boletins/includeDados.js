/** * Função para criar um objeto XMLHTTPRequest */ 
function CriaRequest() {
	try{
		request = new XMLHttpRequest();
	}catch (IEAtual){
		try{ request = new ActiveXObject("Msxml2.XMLHTTP");
	}catch(IEAntigo){
		try{
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(falha){
			request = false;
		}
	} 
}
if (!request) alert("Seu Navegador não suporta Ajax!"); else return request; }

/*
function carregarCadastro(){
	var inserirConteudo = document.getElementById("content_boletins");
	var xmlreq	=	CriaRequest();
	
	inserirConteudo.innerHTML = '<img src="img/ajax-loader.gif">';
	
	xmlreq.open("GET","pages/cadastrar_alterar_cadastro.php",true);
	
	xmlreq.onreadystatechange	=	function(){
		if(xmlreq.readyState == 4){
			if(xmlreq.status == 200){
				inserirConteudo.innerHTML	=	xmlreq.Text;				
			}else{
				inserirConteudo.innerHTML	=	"Erro: " + xmlreq.statusText;
			}
		}
	}
	xmlreq.send(null);
}

function carregarImprimir(){
	
}
function carregarPrintCert(){
	
}
function carregarPrintDec(){
	
}*/