<?php
	$DADOS	=	$_GET['url'];
	if($DADOS === 'front-end'){
?>
	
	<section class="col-md-12 col-lg-12 col-sx-12">
	<h1 class="col-md-12">Front-End</h1>
	<hr class="col-md-12">
	<?php
	
	#Se acessar a página Front-End
	
	$querySelectFront	=	"SELECT * FROM front_end";
	$exeQrSelectFront	=	mysql_query($querySelectFront)or die(mysql_error());
	
	$linhasFront		=	mysql_num_rows($exeQrSelectFront);
	if($linhasFront <= 0){
		echo'Não Tem nada';
	}else{
		while($auxFront			=	mysql_fetch_assoc($exeQrSelectFront)){
			$tituloPost			=	$auxFront['titulo_post'];
			$imgPostPrincipal	=	'img/front_end/'.$auxFront['img_principal'].'.png';
			$conteudoPost		=	$auxFront['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/front_end/'.$auxFront['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxFront['video_tutorial'];
			$autorPost			=	$auxFront['autor'];
			$facebookAutor		=	$auxFront['facebook'];
			$twitterAutor		=	$auxFront['twitter'];
			$youtubeAutor		=	$auxFront['youtube'];
			$linkedinAutor		=	$auxFront['linkedin'];
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
					$imgH[$h] = 'img/front_end/'.$auxFront['img'.$h].'.png';
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
	<h1 class="col-md-12">Front-End</h1>
	<hr class="col-md-12">
	<?php
	$querySelectFront	=	"SELECT * FROM front_end LIMIT 1";
	$exeQrSelectFront	=	mysql_query($querySelectFront)or die(mysql_error());
	
	$linhasFront		=	mysql_num_rows($exeQrSelectFront);
	if($linhasFront <= 0){
		echo'Não Tem nada';
	}else{
		while($auxFront			=	mysql_fetch_assoc($exeQrSelectFront)){
			$tituloPost			=	$auxFront['titulo_post'];
			$imgPostPrincipal	=	'img/front_end/'.$auxFront['img_principal'].'.png';
			$conteudoPost		=	$auxFront['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/front_end/'.$auxFront['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxFront['video_tutorial'];
			$autorPost			=	$auxFront['autor'];
			$facebookAutor		=	$auxFront['facebook'];
			$twitterAutor		=	$auxFront['twitter'];
			$youtubeAutor		=	$auxFront['youtube'];
			$linkedinAutor		=	$auxFront['linkedin'];
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
					$imgH[$h] = 'img/front_end/'.$auxFront['img'.$h].'.png';
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
</section><!--fim chamada front-->