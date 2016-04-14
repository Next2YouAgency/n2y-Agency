<option value="<?php echo $_SESSION['deptoAlterar']?>"><?php echo $_SESSION['deptoAlterar']?></option>
<?php
	$queryBuscarDepto	=	"SELECT * FROM permissoes";
	$exeQrBuscarDepto	=	mysql_query($queryBuscarDepto);

	if(mysql_num_rows($exeQrBuscarDepto) > 0){
		while($resultadoDepto = mysql_fetch_assoc($exeQrBuscarDepto)){
			$deptoUsuarios	=	$resultadoDepto['depto'];
		echo'
		<option value="'.$deptoUsuarios.'">'.$deptoUsuarios.'</option>
		';
		}
	}else{
		
	}
?>