<section class="col-md-12 chamadaOOP">
	<h1 class="col-md-12">SEO</h1>
	<hr class="col-md-12">
	<?php
	$querySelectOOP	=	"SELECT * FROM SEO";
	$exeQrSelectOOP	=	mysql_query($querySelectOOP)or die(mysql_error());
	
	$linhasBack			=	mysql_num_rows($exeQrSelectOOP);
	if($linhasBack <= 0){
		echo'Não Tem nada';
	}else{
		while($auxSEO			=	mysql_fetch_assoc($exeQrSelectOOP)){
			$tituloPost			=	$auxSEO['titulo_post'];
			$imgPostPrincipal	=	'../img/seo/'.$auxSEO['img_principal'].'.png';
			$conteudoPost		=	$auxSEO['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/back/'.$auxSEO['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxSEO['video_tutorial'];
			$autorPost			=	$auxSEO['autor'];
			$facebookAutor		=	$auxSEO['facebook'];
			$twitterAutor		=	$auxSEO['twitter'];
			$youtubeAutor		=	$auxSEO['youtube'];
			$linkedinAutor		=	$auxSEO['linkedin'];
		?>
		<article class="col-md-4 blockChamadas">
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
					$imgH[$h] = 'img/oop/'.$auxSEO['img'.$h].'.png';
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
?>
</section><!--fim chamada OOP-->