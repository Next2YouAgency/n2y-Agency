<option value="<?php echo $_SESSION['nivelAlterar']?>"><?php echo $_SESSION['nivelAlterar']?></option>
<?php
	$queryBuscarNiveis	=	"SELECT * FROM permissoes";
	$exeQrBuscarNiveis	=	mysql_query($queryBuscarNiveis);

	if(mysql_num_rows($exeQrBuscarNiveis) > 0){
		while($resultadoNivel = mysql_fetch_assoc($exeQrBuscarNiveis)){
			$niveisUsuarios	=	$resultadoNivel['nivel'];
		echo'
		<option value="'.$niveisUsuarios.'">'.$niveisUsuarios.'</option>
		';
		}
	}else{
		
	}
?>