<?php
	$DADOS	=	$_GET['url'];
	if($DADOS === 'contabilidade'){
?>
<section class="col-md-12 col-lg-12 col-sx-12">
	<h1 class="col-md-12 col-lg-12 col-sx-12">Contabilidade Geral</h1>
	<hr class="col-md-12 col-lg-12 col-sx-12">
<?php
	$querySelectContabilidade	=	"SELECT * FROM contabilidade";
	$exeQrSelectContabilidade	=	mysql_query($querySelectContabilidade)or die(mysql_error());
	
	$linhascontabilidade		=	mysql_num_rows($exeQrSelectContabilidade);
	if($linhascontabilidade <= 0){
		echo'Não Tem nada';
	}else{
		while($auxContabilidade		=	mysql_fetch_assoc($exeQrSelectContabilidade)){
			$tituloPost			=	$auxContabilidade['titulo_post'];
			$imgPostPrincipal	=	'img/contabilidade/'.$auxContabilidade['img_principal'].'.png';
			$conteudoPost		=	$auxContabilidade['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/contabilidade/'.$auxContabilidade['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxContabilidade['video_tutorial'];
			$autorPost			=	$auxContabilidade['autor'];
			$facebookAutor		=	$auxContabilidade['facebook'];
			$twitterAutor		=	$auxContabilidade['twitter'];
			$youtubeAutor		=	$auxContabilidade['youtube'];
			$linkedinAutor		=	$auxContabilidade['linkedin'];
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
					$imgH[$h] = 'img/contabilidade/'.$auxContabilidade['img'.$h].'.png';
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
	<h1 class="col-md-12 col-lg-12 col-sx-12">Contabilidade Geral</h1>
	<hr class="col-md-12 col-lg-12 col-sx-12">
<?php
	$querySelectContabilidade	=	"SELECT * FROM contabilidade LIMIT 1";
	$exeQrSelectContabilidade	=	mysql_query($querySelectContabilidade)or die(mysql_error());
	
	$linhascontabilidade		=	mysql_num_rows($exeQrSelectContabilidade);
	if($linhascontabilidade <= 0){
		echo'Não Tem nada';
	}else{
		while($auxContabilidade		=	mysql_fetch_assoc($exeQrSelectContabilidade)){
			$tituloPost			=	$auxContabilidade['titulo_post'];
			$imgPostPrincipal	=	'img/contabilidade/'.$auxContabilidade['img_principal'].'.png';
			$conteudoPost		=	$auxContabilidade['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/contabilidade/'.$auxContabilidade['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxContabilidade['video_tutorial'];
			$autorPost			=	$auxContabilidade['autor'];
			$facebookAutor		=	$auxContabilidade['facebook'];
			$twitterAutor		=	$auxContabilidade['twitter'];
			$youtubeAutor		=	$auxContabilidade['youtube'];
			$linkedinAutor		=	$auxContabilidade['linkedin'];
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
					$imgH[$h] = 'img/contabilidade/'.$auxContabilidade['img'.$h].'.png';
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
</section><!--fim chamada contabilidade-->	