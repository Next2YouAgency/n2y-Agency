<table class="table table-bordered table-responsive">
	<tr>
		<td>Id</td>
		<td>Nome da Visita</td>
		<td>Data da Visita</td>
		<td>Horário de Chegada</td>
		<td>Funcion&aacute;rio</td>
		<td>Atendente</td>
		<td>Status</td>
		<td>Convers&atilde;o</td>
	</tr>

<?php
	$queryListarVisitasStreet	=	"SELECT * FROM historico_visitas_street";
	$exeQrListarVisitasStreet	=	mysql_query($queryListarVisitasStreet)or die(mysql_error());
	if(mysql_num_rows($exeQrListarVisitasStreet) > 0){
		
		while($resultadoIndividual	=	mysql_fetch_assoc($exeQrListarVisitasStreet)){
			$idVisita				=	$resultadoIndividual['id'];
			$nomeVisita				=	$resultadoIndividual['nome_visita'];
			$dataVisita				=	$resultadoIndividual['data_visita'];
			$horarioVisita			=	$resultadoIndividual['horario_chegada'];
			$funcionarioVisita		=	$resultadoIndividual['funcionario_street'];
			$atendenteVisita		=	$resultadoIndividual['atendente'];
			$statusVisita			=	$resultadoIndividual['status'];
			$conversaoVisita		=	$resultadoIndividual['conversao'];
			
			#Verificar se o preventivo pertence ao usuarioLogado#
			if($funcionarioPrev == $usuarioLogado){
			?>
			<tr>
				<td><?php echo $idVisita?></td>
				<td><?php echo $nomeVisita?></td>
				<td><?php echo $dataVisita?></td>
				<td><?php echo $horarioVisita?></td>
				<td><?php echo $funcionarioVisita?></td>
				<td><?php echo $atendenteVisita?></td>
				<td>
				<?php
					if($_SESSION['nivel'] === 'master' || $_SESSION['nivel'] === 'supervisor'){
					?>
					<form action="includes/preventivos/alterarConfirmacao.php" method="post">
						<select name="statusVisita" width="40%" style="float:left">
							<option value="<?php echo $statusVisita?>"><?php echo $confPrev?></option>
							<option value="av">AV</option>
							<option value="fh">FH</option>
							<option value="na">N/A</option>
						</select>
						<input type="image" src="img/change.png" width="20%" style="float:left">
					</form>
					<?php
					}else{
						echo $statusVisita;
					}
				?>
				</td>
				<td><?php echo $conversaoVisita;?></td>
			</tr>
			<?php
			}else if($_SESSION['nivel'] === 'master' || $_SESSION['nivel'] === 'supervisor'){
			?>
			<tr>
				<td><?php echo $idVisita?></td>
				<td><?php echo $nomeVisita?></td>
				<td><?php echo $dataVisita?></td>
				<td><?php echo $horarioVisita?></td>
				<td><?php echo $funcionarioVisita?></td>
				<td><?php echo $atendenteVisita?></td>
				<td>
				<?php
					if($_SESSION['nivel'] === 'master' || $_SESSION['nivel'] === 'supervisor'){
					?>
					<form action="includes/preventivos/alterarConfirmacao.php" method="post">
						<select name="statusVisita" width="40%" style="float:left">
							<option value="<?php echo $statusVisita?>"><?php echo $statusVisita?></option>
							<option value="av">AV</option>
							<option value="fh">FH</option>
							<option value="n/a">N/A</option>
						</select>
						<input type="image" src="img/change.png" width="20%" style="float:left">
					</form>
					<?php
					}else{
						echo $statusVisita;
					}
				?>
				</td>
				<td><?php echo $conversaoVisita;?></td>
			</tr>
			<?php
			
			}
			
		}
		?>
		</table>
		<?php
	}else{
		echo 'Não tem nada cadastrado';
	}
?>
<a href="home.php?url=cadVisitaStreet" class="btn btn-primary">Cadastrar Novo</a>