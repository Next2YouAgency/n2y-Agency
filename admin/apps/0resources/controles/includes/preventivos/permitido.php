<table class="table table-bordered table-responsive">
	<tr>
		<td>Id</td>
		<td>CTR</td>
		<td>Tipo</td>
		<td>Quantidade</td>
		<td>Data</td>
		<td>Funcion&aacute;rio</td>
		<td>Confirma&ccedil;&atilde;o</td>
	</tr>

<?php
	$queryListarPreventivos	=	"SELECT * FROM historicopreventivo";
	$exeQrListarPreventivos	=	mysql_query($queryListarPreventivos)or die(mysql_error());
	if(mysql_num_rows($exeQrListarPreventivos) > 0){
		?>
		
		<?php
		while($resultadoIndividual	=	mysql_fetch_assoc($exeQrListarPreventivos)){
			$idPrev				=	$resultadoIndividual['id'];
			$ctrPrev			=	$resultadoIndividual['ctr'];
			$tipoPrev			=	$resultadoIndividual['tipo'];
			$quantidadePrev		=	$resultadoIndividual['quantidade'];
			$dataPrev			=	$resultadoIndividual['data_agendada'];
			$funcionarioPrev	=	$resultadoIndividual['funcionario'];
			$confPrev			=	$resultadoIndividual['confirmacao'];
			
			#Verificar se o preventivo pertence ao usuarioLogado#
			if($funcionarioPrev == $usuarioLogado){
			?>
			<tr>
				<td><?php echo $idPrev?></td>
				<td><?php echo $ctrPrev?></td>
				<td><?php echo $tipoPrev?></td>
				<td><?php echo $quantidadePrev?></td>
				<td><?php echo $dataPrev?></td>
				<td><?php echo $funcionarioPrev?></td>
				<td>
				<?php
				if($_SESSION['nivel'] === 'master' || $_SESSION['nivel'] === 'supervisor'){
				?>
				<form action="includes/preventivos/alterarConfirmacao.php" method="post">
					<select name="statusPreventivo" width="40%" style="float:left">
						<option value="<?php echo $confPrev?>"><?php echo $confPrev?></option>
						<option value="sim">Sim</option>
					</select>
					<input type="image" src="img/change.png" width="20%" style="float:left">
				</form>
				<?php
				}else{
					echo $confPrev;
				}
				?>
				</td>
			</tr>
			<?php
			}else if($_SESSION['nivel'] === 'master' || $_SESSION['nivel'] === 'supervisor'){
			?>
			<tr>
				<td><?php echo $idPrev?></td>
				<td><?php echo $ctrPrev?></td>
				<td><?php echo $tipoPrev?></td>
				<td><?php echo $quantidadePrev?></td>
				<td><?php echo $dataPrev?></td>
				<td><?php echo $funcionarioPrev?></td>
				<td>
				<form action="includes/preventivos/alterarConfirmacao.php" method="post">
					<select name="statusPreventivo" width="40%" style="float:left">
						<option value="<?php echo $confPrev?>"><?php echo $confPrev?></option>
						<option value="sim">Sim</option>
						<input type="image" src="img/change.png" width="20%" style="float:left">
					</select>
				</form>
				</td>
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
<a href="home.php?url=cadastrarPreventivo" class="btn btn-primary">Cadastrar Novo</a>