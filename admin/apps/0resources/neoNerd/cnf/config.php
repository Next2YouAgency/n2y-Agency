<?php
	define("SERVIDOR","localhost");
	define("USUARIO","root");
	define("SENHA","");
	define("DB","neo_noticias");
	
	$conectar	=	mysql_connect(SERVIDOR,USUARIO,SENHA)or die(mysql_error());
	
	mysql_select_db(DB,$conectar)or die(mysql_error());
	
	mysql_set_charset("utf8");
	
	
?>