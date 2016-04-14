<?php
	
	define("SERVIDOR","localhost");
	define("USUARIO","root");
	define("SENHA","");
	define("DB","n2");
	
	/*
	define("SERVIDOR","sql200.alojamentogratuito.com");
	define("USUARIO","alo_16629250");
	define("SENHA","casolada13231010");
	define("DB","alo_16629250_n2");
	*/
	$conectar	=	mysql_connect(SERVIDOR,USUARIO,SENHA)or die(mysql_error("NÃO FOI POSSÍVEL CONECTAR AO SERVIDOR"));
	
	mysql_select_db(DB,$conectar);
	
	mysql_set_charset("utf8");

##############################################
#				Resumo de texto				 #
##############################################
function resumo($string,$chars) {
	if (strlen($string) > $chars) {
		while (substr($string,$chars,1) <> ' ' && ($chars < strlen($string))){
		$chars++;
		};
	};
	return substr($string,0,$chars);
}
?>