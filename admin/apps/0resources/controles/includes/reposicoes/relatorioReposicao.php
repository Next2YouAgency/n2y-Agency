<?php
	$professor = $_POST['escolhaProfessor'];
	$marcar = $_GET[marcar];
	$professorM = $_GET[professorM];
	

	/* BUSCA DO HISTÓRICO */
	$queryConsultaHistorico = "SELECT * FROM historicoreposicao ORDER BY hora ASC";
	$execQrHistoricoReposicao = mysql_query($queryConsultaHistorico);
?>
	<table class="text-center table-bordered ">
		<tr style="font-size:26px;">
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">Dia</td>
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">Horário</td>
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">CTR</td>
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">Aluno</td>
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">Módulo</td>
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">Aula</td>
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">Professor</td>
			<td class="col-md-1 col-xs-1 col-lg-1 col-sm-6">Assinatura</td>
		</tr>
		
	<?php
		
		if(mysql_num_rows($execQrHistoricoReposicao) <= 0){
			?>
			<h1>Não há reposições agendadas!</h1>
			<?php
		}else{
			while($dadosHistorico = mysql_fetch_array($execQrHistoricoReposicao)){
			
				$dataReposicao = $dadosHistorico['dia'];
				$horaMarcada = $dadosHistorico['hora'];
				$ctrReposicao = $dadosHistorico['ctr'];
				$alunoReposicao = $dadosHistorico['aluno'];
				$professorReposicao = $dadosHistorico['professor'];
				$moduloReposicao = $dadosHistorico['modulo'];
				$aulaReposicao = $dadosHistorico['aula'];
				
				echo'<tr style="height:30px;">';
					echo'
						<td>'.$dataReposicao.'</td>
						<td>'.$horaMarcada.':00</td>
						<td>'.$ctrReposicao.'</td>
						<td>'.$alunoReposicao.'</td>
						<td>'.$moduloReposicao.'</td>
						<td>'.$aulaReposicao.'</td>
						<td>'.$professorReposicao.'</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________</td>
					';
				echo'</tr>';
			}
		}
	?>
	</table>
<input type="button" value="Imprimir Reposições" onclick="javascript:window.print();" class="btn btn-info hidden-print" />
<a href="home.php?url=reposicoes" class="btn btn-primary hidden-print">Voltar</a>

</script>