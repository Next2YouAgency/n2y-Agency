<?php
include_once '../cnf/config.php';
$nomeFuncionario	=	$_POST['nomeFuncionario'];
$usuario			=	$_POST['usuario'];
$senha				=	md5($_POST['senha']);
$nivelPermissao		=	$_POST['nivel'];
$deptoFuncionario	=	$_POST['depto'];

$queryInserirFunc	=	"INSERT INTO usuarios(usuario,senha,nome,nivel,departamento) VALUES('$usuario','$senha','$nomeFuncionario','$nivelPermissao','$deptoFuncionario')";

$exeQrInserirFunc	=	mysql_query($queryInserirFunc)or die(mysql_error());

echo'
	<script>
		alert("O Funcionário <b>'.$nomeFuncionario.'</b>, foi cadastrado com sucesso!")
	</script>
	<meta http-equiv="refresh" content="0;../home.php">
';
?>