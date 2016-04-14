<?php	
	$professor = $_POST['escolhaProfessor'];
	$marcar = $_GET[marcar];
	$professorM = $_GET[professorM];
	
	
	if($professor == ""){
		?>
		<h3 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-bottom:50px;"><u>Selecione o professor!</u></h3>
	<?php
	include 'cadastroProfessores.php';
	include 'selectProfessores.php';
	include 'botoesReposicao.php';
	?>

		
		
		<?php
	}else{
		?>
		<h3 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-bottom:50px;"><u>Horários do professor: <?php echo $professor ?> </u></h3>
		
		
		<?php
		include 'cadastroProfessores.php';
		include 'tabelaReposicao.php';
		include 'botoesReposicao.php';		
	}
?>