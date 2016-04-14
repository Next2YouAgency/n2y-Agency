<div class="col-xs-10 col-sm-8 col-md-8 col-lg-12 roundedComponent">
	<?php
		//Tomada de Decição para preencher o restante do cadastro
		if($tipo_pessoa === 'cpf'){
			//caso pessoa física
			include_once 'cadastro_cpf.php';
		}else{
			//caso pessoa jurídica
			include_once 'cadastro_cnpj.php';
		}
	?>
</div>