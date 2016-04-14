<?php
	$DADOS	=	$_GET['url'];
	if($DADOS === 'adm'){
?>
<section class="col-md-12 col-lg-12 col-sx-12">
	<h1 class="col-md-12 col-lg-12 col-sx-12">Administração de Empresas</h1>
	<hr class="col-md-12 col-lg-12 col-sx-12">
<?php
	$querySelectAdm	=	"SELECT * FROM adm";
	$querySelectAdm	=	mysql_query($querySelectAdm)or die(mysql_error());
	
	$linhasadm		=	mysql_num_rows($querySelectAdm);
	if($linhasadm <= 0){
		echo'Não Tem nada';
	}else{
		while($auxAdm			=	mysql_fetch_assoc($querySelectAdm)){
			$tituloPost			=	$auxAdm['titulo_post'];
			$imgPostPrincipal	=	'img/adm/'.$auxAdm['img_principal'].'.png';
			$conteudoPost		=	$auxAdm['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/adm/'.$auxAdm['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxAdm['video_tutorial'];
			$autorPost			=	$auxAdm['autor'];
			$facebookAutor		=	$auxAdm['facebook'];
			$twitterAutor		=	$auxAdm['twitter'];
			$youtubeAutor		=	$auxAdm['youtube'];
			$linkedinAutor		=	$auxAdm['linkedin'];
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
					$imgH[$h] = 'img/adm/'.$auxAdm['img'.$h].'.png';
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
	<h1 class="col-md-12 col-lg-12 col-sx-12">Administração de Empresas</h1>
	<hr class="col-md-12 col-lg-12 col-sx-12">
<?php
	$querySelectAdm	=	"SELECT * FROM adm LIMIT 1";
	$querySelectAdm	=	mysql_query($querySelectAdm)or die(mysql_error());
	
	$linhasadm		=	mysql_num_rows($querySelectAdm);
	if($linhasadm <= 0){
		echo'Não Tem nada';
	}else{
		while($auxAdm			=	mysql_fetch_assoc($querySelectAdm)){
			$tituloPost			=	$auxAdm['titulo_post'];
			$imgPostPrincipal	=	'img/adm/'.$auxAdm['img_principal'].'.png';
			$conteudoPost		=	$auxAdm['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/adm/'.$auxAdm['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxAdm['video_tutorial'];
			$autorPost			=	$auxAdm['autor'];
			$facebookAutor		=	$auxAdm['facebook'];
			$twitterAutor		=	$auxAdm['twitter'];
			$youtubeAutor		=	$auxAdm['youtube'];
			$linkedinAutor		=	$auxAdm['linkedin'];
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
					$imgH[$h] = 'img/adm/'.$auxAdm['img'.$h].'.png';
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
</section><!--fim chamada adm-->	