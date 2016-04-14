	<div id="painelTreinamentos">
			<h1 class="text-center">Horários para Sextas-Feiras</h1>
			<?php
				$queryConsultarHotrarios	= 'SELECT * FROM historicotreinamento';
				$exeQrConsultarHorarios		= mysql_query($queryConsultarHotrarios)or die(mysql_error());
				
				if(mysql_num_rows($exeQrConsultarHorarios)>0){
			?>
						<table class="table-bordered col-md-12">
							<tr class="topoTabela lead">
								<td>Lab</td>
								<td>Maq</td>
								<td>Horário</td>
								<td>CTR</td>
								<td>Aluno</td>
								<td title="Reforço, Treinamento, Plantão de Dúvidas">Tipo</td>
								<td>Assinatura</td>
							</tr>
			
			<?php
					while($res = mysql_fetch_array($exeQrConsultarHorarios))
					{
						$id = $res['id'];
						$lab = $res['lab'];
						$maquina = $res['maq'];
						$entrada = $res['horarios'];
						$tipo = $res['tipo'];
						$ctr = $res['ctr'];
						$nome = $res['aluno'];
						
						$queryHistorico = "SELECT id,lab,maq,horarios,tipo,ctr,aluno FROM historicotreinamento";
						$exeqrHistorico = mysql_query($queryHistorico) or die (mysql_error());
						
						echo '<tr>';
							echo '<td>';
									echo $res['lab'];
							echo '</td>';
							echo '<td>';
									echo $res['maq'];
							echo '</td>';
							echo '<td>';
									echo $res['horarios'];
							echo '</td>';
							echo '<td>';
									echo $res['ctr'];
							echo '</td>';
							echo '<td>';
									echo $res['aluno'];
							echo '</td>';
							echo '<td>';
									echo $res['tipo'];
							echo '</td>
								<td style="width:30%;">x</td>
							</tr>';
					}
				}else{
					echo'
						<h3 style="float:left;width:100%;text-align:center;">Não há treinamentos agendados!</h3>
						<h3 style="float:left;width:100%;text-align:center;">Clique no botão Agendar Horário</h3>
					';
				}
			?>
		</table>
		<div class="col-md-4"></div>
		<div class="col-md-6" style="margin-top:20px">
			<a href="home.php" class="hidden-print"><span class="btn btn-primary">Fechar Treinamentos</span></a>
			<a class="btn btn-primary hidden-print" href="home.php?url=treimanentos&urlAgendar=agendarTreino" >Agendar Horário</a>
			<input type="button" value="Imprimir Relatório" onclick="javascript:window.print();" class="btn btn-info hidden-print" title="Imprimir Relatório"/>
		</div>
		
		<?php
			$urlAgendar	=	$_GET['urlAgendar'];
			if(!empty($urlAgendar)){
				include 'includes/treinamentos/marcarTreinamento.php';
			}
		?>
		
	</div>	<!--painelAgendamentos-->
	
</body>
</html>