<?php
	$queryBuscaTdsFuncionarios	=	"SELECT * FROM usuarios";
	$exeQrBuscaTdsFuncionarios	=	mysql_query($queryBuscaTdsFuncionarios);
?>
	<table class="table table-bordered table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<tr>
			<td>Usu&aacute;rio</td>
			<td>Nome</td>
			<td>Departamento</td>
			<td>N&iacute;vel</td>
			<td>Situa&ccedil;&atilde;o</td>
		</tr>
	<?php
	if(mysql_num_rows($exeQrBuscaTdsFuncionarios) > 0){
		while($resBusTdsFun		=	mysql_fetch_assoc($exeQrBuscaTdsFuncionarios)){
			$usuario			=	$resBusTdsFun['usuario'];
			$senha				=	$resBusTdsFun['senha'];
			$nome				=	$resBusTdsFun['nome'];
			$depart				=	$resBusTdsFun['departamento'];
			$nivel				=	$resBusTdsFun['nivel'];
			$situacao			=	$resBusTdsFun['situacao'];
			
		if($situacao === 'ativo'){
			?>
			<tr style="font-size:12px" class="bg-primary">
			<?php
		}else{
			?>
			<tr style="font-size:12px" class="bg-danger">
			<?php
		}
	?>	
			<td><?php echo $usuario?></td>
			<td><?php echo $nome?></td>
			<td><?php echo $depart?></td>
			<td><?php echo $nivel?></td>
			<td>
				<?php echo $situacao?>
				
				<?php
					echo '
					
					<a href="home.php?url=alterarSituacao&usuario='.$usuario.'&senha='.$senha.'&nome='.$nome.'&depart='.$depart.'&nivel='.$nivel.'&situacao='.$situacao.'">
						<img src="img/change.png" class="img-responsive" alt="Alterar Situa&ccedil;&atilde;o" title="Alterar Situa&ccedil;&atilde;o">
					</a>
					
					
					';
				?>
				
			</td>
		</tr>
	
	<?php
		}
	}else{
		echo 'Não foram encontrados funcionários cadastrados';
	}
?>
</table>