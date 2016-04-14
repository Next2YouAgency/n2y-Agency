<?php
	require '../../cnf/config.php';
	
	$professor = $_POST['nomeProfessor'];
	$primeiro = $_POST['primeiroHorario'];
	$ultimo = $_POST['ultimoHorario'];
	
	$query = "INSERT INTO professores (nomeProfessor,primeiroHorario,ultimoHorario) VALUES ('$professor','$primeiro','$ultimo')";
	$exeqr = mysql_query($query) or die (mysql_error());
	
	echo('<meta http-equiv="refresh" content="0; ../../home.php?url=reposicoes"/>');
?>