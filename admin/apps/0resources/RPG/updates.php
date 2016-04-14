<?php
	require 'cnf/define.php';
	$queryListarUpDates		=	"SELECT * FROM updates WHERE novo = '1'";
	$exeQrListarUpDates		=	mysql_query($queryListarUpDates)or die(mysql_error());
	?>
	<table class="table table-bordered">
	<?php
	if(mysql_num_rows($exeQrListarUpDates) <= 0){
		?>
		<h1>Nenhuma novidade</h1>
		<?php
	}else{
		while($resultUpDates	=	mysql_fetch_assoc($exeQrListarUpDates)){
		?>
		<tr>
			<td><?php echo $resultUpDates['data_update']?></td>
			<td><?php echo $resultUpDates['tipo_update']?></td>
			<td><?php echo $resultUpDates['link']?></td>
		</tr>
		<?php
		}
	}
?>
	</table>
<?php
	include_once 'cadastrarPersonagens.php';
?>