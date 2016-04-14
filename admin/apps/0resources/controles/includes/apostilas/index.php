<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	<?php
		$deptoUsuario		=	$_SESSION['depto'];
		$permissaoUsuario	=	$_SESSION['nivel'];
		
		$consulta = 'SELECT * FROM apostilas';
		$visualiza = mysql_query($consulta) or die(mysql_error());
		
		if (mysql_num_rows($visualiza) == 0) {
			echo "Nenhuma apostila registrada em estoque!";
			exit;
		}else{
			while ($coluna = mysql_fetch_assoc($visualiza)) {
				
			?>
			<table class="table-bordered col-md-6 col-lg-6 col-sm-6 col-xs-6">
			<tr><td colspan="2" style="text-align:center; font-size:26px;font-weight:bolder;">Apostilas em estoque</td></tr>
			<?php include 'relatorioApostilas.php' ?>
			</table>
			<?php
			}
		}
	?>
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
		<?php include '0permissoes/permissaoDepto.php'?>
	</div><!--açãoApostilas-->
</div><!--painelApostilas-->