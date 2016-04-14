<form action="pages_adm/publicarPost.php" method="post" enctype="multipart/form-data">
	<?php
	$material	=	$_GET['link'];
	?>
	<div class="col-lg-12" style="margin-top:50px">
	<h2>Material do Post: <?php echo ucfirst($material);?></h2>
	</div>
	<div class="form-group col-md-6 col-lg-6 col-xs-12">
		<label for="titulo_post"><h3>Título do Post</h3></label>
		<input type="text" name="titulo_post" placeholder="Título do post (até 50 Caracteres)" required class="form-control">
	</div>
	
	<div class="form-group col-md-6 col-lg-6 col-xs-12">
		<label for="img_principal"><h3>Imagem Principal</h3></label>
		<input type="file" name="img_principal" class="form-control btn-warning" required>
	</div>
	
	<div class="form-group col-md-12 col-lg-12 col-xs-12">
		<label for="conteudo_post"><h3>Conteúdo do Post</h3></label>
		<textarea name="conteudo_post" class="form-control" style="height:300px" placeholder="Todo o conteúdo do post" required></textarea>
	</div>
	<?php
	
	for($auxImgSec = 1; $auxImgSec <= 12; $auxImgSec++){
		?>
	<div class="form-group col-md-4 col-lg-4 col-xs-12">
		<label for="img<?php echo $auxImgSec; ?>"><h3>Imagem Extra <?php echo $auxImgSec; ?></h3></label>
		<input type="file" name="img<?php echo $auxImgSec?>" class="form-control btn-primary">
	</div>
	<?php
	}
	?>
	
	<input type="hidden" name="autor" value="<?php echo $_SESSION["nome"] ?>" />
	<input type="hidden" name="email" value="<?php echo $_SESSION["email"] ?>" />
	<input type="hidden" name="nivel" value="<?php echo $_SESSION["nivel"] ?>" />
	<input type="hidden" name="twitter" value="<?php echo $_SESSION["twitter"] ?>" />
	<input type="hidden" name="facebook" value="<?php echo $_SESSION["facebook"] ?>" />
	<input type="hidden" name="youtube" value="<?php echo $_SESSION["youtube"] ?>" />
	<input type="hidden" name="whats" value="<?php echo $_SESSION["whats"] ?>" />
	<input type="hidden" name="material" value="<?php echo $material ?>" />
	
	<input type="submit" name="submit" value="Publicar" class="btn btn-info">
</form>
<script>
	$("textarea.jqte-test").jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$(".jqte-test").jqte({"status" : jqteStatus})
	});
</script>