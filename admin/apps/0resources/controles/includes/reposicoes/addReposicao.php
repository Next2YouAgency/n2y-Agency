<?php
include '../../cnf/config.php';

$funcionario = $_POST['funcionario'];
date_default_timezone_set('UTC');
$dataM = date('d/m/Y');
$addCtr = $_POST['ctrAluno'];
$addAluno = $_POST['nomeAluno'];
$diaReposicao = $_POST['diaReposicao'];
$horaReposicao = $_POST['horaReposicao'];
$professor = $_POST['profReposicao'];
$addModulo = $_POST['moduloC'];
$addAula = $_POST['aulaModulo'];


$queryAddReposicao = "INSERT INTO historicoreposicao (funcionario,dataM,ctr,aluno,dia,hora,professor,modulo,aula) VALUES ('$funcionario','$dataM','$addCtr','$addAluno','$diaReposicao','$horaReposicao','$professor','$addModulo','$addAula')";
	$exeqrAddReposicao = mysql_query($queryAddReposicao) or die (mysql_error());

	session_start();
		$_SESSION['aluno'] = $addAluno;
		$_SESSION['professor'] = $professor;
		$_SESSION['diaReposicao'] = $diaReposicao;
		$_SESSION['horaReposicao'] = $horaReposicao;
		$_SESSION['addCtr'] = $addCtr;
		
	echo('<meta http-equiv="refresh" content="0;../../home.php?url=reposicaoImprimir"/>');

?>