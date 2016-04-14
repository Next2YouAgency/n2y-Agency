<?php
	$DADOS	=	$_GET['url'];
	if($DADOS === 'secretariado'){
?>
	
	<section class="col-md-12 col-lg-12 col-sx-12">
	<h1 class="col-md-12 col-lg-12 col-sx-12">Téc. Secretariado</h1>
	<hr class="col-md-12 col-lg-12 col-sx-12">
	<?php
	
	#Se acessar a página Departamento Pessoal
	
	$querySelectSecretariado	=	"SELECT * FROM secretariado";
	$exeQrSelectSecretariado	=	mysql_query($querySelectSecretariado)or die(mysql_error());
	
	$linhassecretariado		=	mysql_num_rows($exeQrSelectSecretariado);
	if($linhassecretariado <= 0){
		echo'Não Tem nada';
	}else{
		while($auxSecretariado	=	mysql_fetch_assoc($exeQrSelectSecretariado)){
			$tituloPost			=	$auxSecretariado['titulo_post'];
			$imgPostPrincipal	=	'img/secretariado/'.$auxSecretariado['img_principal'].'.png';
			$conteudoPost		=	$auxSecretariado['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/secretariado/'.$auxSecretariado['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxSecretariado['video_tutorial'];
			$autorPost			=	$auxSecretariado['autor'];
			$facebookAutor		=	$auxSecretariado['facebook'];
			$twitterAutor		=	$auxSecretariado['twitter'];
			$youtubeAutor		=	$auxSecretariado['youtube'];
			$linkedinAutor		=	$auxSecretariado['linkedin'];
		?>
		<article class="col-md-4 col-lg-4 col-sx-4">
		<img src="<?php echo $imgPostPrincipal ?>" class="img-responsive" />
		<h2><?php echo $tituloPost;?></h2>
		<p class="lead">
			<?php echo resumo($conteudoPost,150).' [...]';?>
		</p>
		
		<form class="form" action="pages/visualizarPost.php" method="get">
			<input type="hidden" name="tituloPost" value="<?php echo $tituloPost;?>">
			<input type="hidden" name="conteudoPost" value="<?php echo $conteudoPost?>">
			<input type="hidden" name="imgPostPrincipal" value="<?php echo $imgPostPrincipal?>">
			<!--hiddens img-->
			<?php
				for($h=0 ; $h<=10; $h++){
					$imgH[$h] = 'img/secretariado/'.$auxSecretariado['img'.$h].'.png';
					echo '
					<input type="hidden" name="imgPost'.$h.'" value="'.$imgH[$h].'">
					';
				}
			?>
			<!--fim hiddens img-->
			<input type="submit" name="verPost" value="Ver Post Completo" class="col-md-12 btn btn-info btn-xs formBtn">
		</form>
	</article>
		<?php
		}
	}
	}else{
		?>

<section class="col-md-4 col-lg-4 col-sx-4">
	<h1 class="col-md-12">Téc. Secretariado</h1>
	<hr class="col-md-12">
<?php
	$querySelectSecretariado	=	"SELECT * FROM secretariado LIMIT 1";
	$exeQrSelectSecretariado	=	mysql_query($querySelectSecretariado)or die(mysql_error());
	
	$linhassecretariado		=	mysql_num_rows($exeQrSelectSecretariado);
	if($linhassecretariado <= 0){
		echo'Não Tem nada';
	}else{
		while($auxSecretariado	=	mysql_fetch_assoc($exeQrSelectSecretariado)){
			$tituloPost			=	$auxSecretariado['titulo_post'];
			$imgPostPrincipal	=	'img/secretariado/'.$auxSecretariado['img_principal'].'.png';
			$conteudoPost		=	$auxSecretariado['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/secretariado/'.$auxSecretariado['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxSecretariado['video_tutorial'];
			$autorPost			=	$auxSecretariado['autor'];
			$facebookAutor		=	$auxSecretariado['facebook'];
			$twitterAutor		=	$auxSecretariado['twitter'];
			$youtubeAutor		=	$auxSecretariado['youtube'];
			$linkedinAutor		=	$auxSecretariado['linkedin'];
		?>
		<article class="col-md-12 col-lg-12 col-sx-12">
		<img src="<?php echo $imgPostPrincipal ?>" class="img-responsive" />
		<h2><?php echo $tituloPost;?></h2>
		<p class="lead">
			<?php echo resumo($conteudoPost,150).' [...]';?>
		</p>
		
		<form class="form" action="pages/visualizarPost.php" method="get">
			<input type="hidden" name="tituloPost" value="<?php echo $tituloPost;?>">
			<input type="hidden" name="conteudoPost" value="<?php echo $conteudoPost?>">
			<input type="hidden" name="imgPostPrincipal" value="<?php echo $imgPostPrincipal?>">
			<!--hiddens img-->
			<?php
				for($h=0 ; $h<=10; $h++){
					$imgH[$h] = 'img/secretariado/'.$auxSecretariado['img'.$h].'.png';
					echo '
					<input type="hidden" name="imgPost'.$h.'" value="'.$imgH[$h].'">
					';
				}
			?>
			<!--fim hiddens img-->
			<input type="submit" name="verPost" value="Ver Post Completo" class="col-md-12 btn btn-info btn-xs formBtn">
		</form>
	</article>
		<?php
		}
	}
	}
	
?>
</section><!--fim chamada secretariado-->	