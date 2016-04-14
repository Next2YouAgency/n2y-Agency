<?php
//Off-line
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("BD","arpg");
define("DSN","mysql:host=".HOST.";dbname=".BD);

$conexao	=	mysql_connect(HOST,USER,PASS)or die('Erro ao conectar ao banco de dados: <strong>'.mysql_error().'</strong>');
$selectdb	=	mysql_select_db(BD,$conexao)or die('Erro ao conectar ao banco de dados: <strong>'.mysql_error().'</strong>');
/*
//On-Line
define("HOST","sql106.hostgratisbr.ga");
define("USER","rgtoa_16880849");
define("PASS","230412");
define("BD","rgtoa_16880849_books");
define("DSN","mysql:host=".HOST.";dbname=".BD);
define("TEMPO_LIMITE",1);
*/