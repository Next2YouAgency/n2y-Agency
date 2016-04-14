<?php
	/*
	define("HOST","mysql.hostinger.com.br");
	define("USUARIO","u335449281_admin");
	define("SENHA","casolada13231010");
	define("DDB","u335449281_books");
	define("TABELAAPOSTILAS","apostilas");
	
	*/
	
	
	define("HOST","localhost");
	define("USUARIO","root");
	define("SENHA","");
	define("DDB","allnet");
	define("TABELAAPOSTILAS","apostilas");
	
	$conexao = mysql_connect(HOST, USUARIO, SENHA) or die (mysql_error);
	$dbconexao = mysql_select_db(DDB, $conexao) or die (mysql_error);
	
#####################################################
//incluir apostila
#####################################################
function incluirApostila($apostila,$qtd)
{
	$consulta = 'SELECT * FROM apostilas';
	$visualiza = mysql_query($consulta) or die(mysql_error());
	
	while ($coluna = mysql_fetch_assoc($visualiza))
	{
	$moduloApostila = $coluna[$apostila];
	echo 'moduloApostila '.$moduloApostila.'<br/>';
	$adicionar = $moduloApostila + $qtd;
	echo 'adicionar '.$adicionar.'<br/>';
	
	$altera = 'UPDATE apostilas SET '.$apostila.'='.$adicionar.' WHERE id=1';
	$alterar = mysql_query($altera) or die(mysql_error());
	
	echo('<meta http-equiv="refresh" content="0.5;home.php?url=apostilas"/>');
	}
}

#####################################################
//entregar apostila
#####################################################
function entregarApostila($apostila,$qtd)
{
	$consulta = 'SELECT * FROM apostilas';
	$visualiza = mysql_query($consulta) or die(mysql_error());
	
	while ($coluna = mysql_fetch_assoc($visualiza))
	{
	$moduloApostila = $coluna[$apostila];
	echo 'moduloApostila '.$moduloApostila.'<br/>';
	$adicionar = $moduloApostila - $qtd;
	echo 'adicionar '.$adicionar.'<br/>';
	
	$altera = 'UPDATE apostilas SET '.$apostila.'='.$adicionar.' WHERE id=1';
	$alterar = mysql_query($altera) or die(mysql_error());
	
	session_start();
	$_SESSION['modulo'] = $apostila;
	$_SESSION['qtd'] = $qtd;
	echo('<meta http-equiv="refresh" content="0.5; includes/apostilas/entregarImprimir.php" />');
	}
}

#####################################################
//Imprimir incluir apostila
#####################################################
function imprimirIncluirApostila($apostila,$qtd)
{
	$consultaApostila = 'SELECT * FROM apostilas';
	$visualizaApostila = mysql_query($consultaApostila) or die(mysql_error());
	
	while ($coluna = mysql_fetch_assoc($visualizaApostila))
	{
	$moduloApostila = $coluna[$apostila];
	echo 'moduloApostila '.$moduloApostila.'<br/>';
	$adicionar = $moduloApostila + $qtd;
	echo 'adicionar '.$adicionar.'<br/>';
	
	$altera = 'UPDATE apostilas SET '.$apostila.'='.$adicionar.' WHERE id=1';
	$alterar = mysql_query($altera) or die(mysql_error());
	}
}
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