<?php
	require '../../cnf/config.php';
	$LAB = $_POST['lab'];
	$MAQ = $_POST['maq'];
	$HORARIO = $_POST['horario'];
	$CTR = $_POST['ctr'];
	$ALUNO = $_POST['aluno'];
	$TIPO = $_POST['tipo'];
	
	mysql_query("INSERT INTO historicotreinamento (lab,maq,horarios,tipo,ctr,aluno) VALUES ('$LAB','$MAQ','$HORARIO','$TIPO','$CTR','$ALUNO')");
?>
<script>
	alert("agendado com sucesso! A página será redirecionada");
	window.history.go(-3);
</script>