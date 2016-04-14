<?php
	define("HOST","localhost");
	define("USER","root");
	define("PASS","");
	define("DB","a2y");
	define("DNS","mysql_host=".HOST.";dbnane=".DB);
	
	$conect	=	mysql_connect(HOST,USER,PASS)or die("Erro ao conectar ao servidor: ".mysql_error());
	
	$select_db	=	mysql_select_db(DB,$conect)or die("Erro ao conectar ao servidor: ".mysql_error());
	
	if($select_db){
		echo "Conectado";
	}else{
		echo "Não conectado";
	}