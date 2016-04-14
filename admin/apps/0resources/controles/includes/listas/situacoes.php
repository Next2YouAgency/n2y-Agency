<option value="<?php echo $_SESSION['situacaoAlterar']?>"><?php echo $_SESSION['situacaoAlterar']?></option>
<?php
	if($_SESSION['situacaoAlterar']=== 'ativo'){
		?>
		<option value="inativo">Inativo</option>
		<?php
	}else{
		?>
		<option value="ativo">Ativo</option>
		<?php
	}
?>