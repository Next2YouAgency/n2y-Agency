<?php
	$DADOS	=	$_GET['url'];
	if($DADOS === 'dep_pessoal'){
?>
	
	<section class="col-md-12 col-lg-12 col-sx-12">
	<h1 class="col-md-12 col-lg-12 col-sx-12">Departamento Pessoal</h1>
	<hr class="col-md-12 col-lg-12 col-sx-12">
	<?php
	
	#Se acessar a página Departamento Pessoal
	
	$querySelectDP				=	"SELECT * FROM dep_pessoal";
	$querySelectDP				=	mysql_query($querySelectDP)or die(mysql_error());
	
	$linhasdp		=	mysql_num_rows($querySelectDP);
	if($linhasdp <= 0){
		echo'Não Tem nada';
	}else{
		while($auxDP			=	mysql_fetch_assoc($querySelectDP)){
			$tituloPost			=	$auxDP['titulo_post'];
			$imgPostPrincipal	=	'img/dep_pessoal/'.$auxDP['img_principal'].'.png';
			$conteudoPost		=	$auxDP['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/dep_pessoal/'.$auxDP['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxDP['video_tutorial'];
			$autorPost			=	$auxDP['autor'];
			$facebookAutor		=	$auxDP['facebook'];
			$twitterAutor		=	$auxDP['twitter'];
			$youtubeAutor		=	$auxDP['youtube'];
			$linkedinAutor		=	$auxDP['linkedin'];
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
					$imgH[$h] = 'img/dep_pessoal/'.$auxDP['img'.$h].'.png';
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
	<h1 class="col-md-12">Departamento Pessoal</h1>
	<hr class="col-md-12">
<?php
	$querySelectDP				=	"SELECT * FROM dep_pessoal LIMIT 1";
	$querySelectDP				=	mysql_query($querySelectDP)or die(mysql_error());
	
	$linhasdp		=	mysql_num_rows($querySelectDP);
	if($linhasdp <= 0){
		echo'Não Tem nada';
	}else{
		while($auxDP			=	mysql_fetch_assoc($querySelectDP)){
			$tituloPost			=	$auxDP['titulo_post'];
			$imgPostPrincipal	=	'img/dep_pessoal/'.$auxDP['img_principal'].'.png';
			$conteudoPost		=	$auxDP['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/dep_pessoal/'.$auxDP['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxDP['video_tutorial'];
			$autorPost			=	$auxDP['autor'];
			$facebookAutor		=	$auxDP['facebook'];
			$twitterAutor		=	$auxDP['twitter'];
			$youtubeAutor		=	$auxDP['youtube'];
			$linkedinAutor		=	$auxDP['linkedin'];
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
					$imgH[$h] = 'img/dep_pessoal/'.$auxDP['img'.$h].'.png';
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
</section><!--fim chamada dp-->	