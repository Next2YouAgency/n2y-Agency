<section class="col-md-12 chamadaDesign">
<h1 class="col-md-12">Design</h1>
<hr class="col-md-12">
<?php
	$querySelectDesign	=	"SELECT * FROM design";
	$exeQrSelectDesign	=	mysql_query($querySelectDesign)or die(mysql_error());
	
	$linhasDesign		=	mysql_num_rows($exeQrSelectDesign);
	if($linhasDesign <= 0){
		echo'Não Tem nada';
	}else{
		while($auxDesign		=	mysql_fetch_assoc($exeQrSelectDesign)){
			$tituloPost			=	$auxDesign['titulo_post'];
			$imgPostPrincipal	=	'../img/design/'.$auxDesign['img_principal'].'.png';
			$conteudoPost		=	$auxDesign['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/design/'.$auxDesign['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxDesign['video_tutorial'];
			$autorPost			=	$auxDesign['autor'];
			$facebookAutor		=	$auxDesign['facebook'];
			$twitterAutor		=	$auxDesign['twitter'];
			$youtubeAutor		=	$auxDesign['youtube'];
			$linkedinAutor		=	$auxDesign['linkedin'];
		?>
		<article class="col-md-4 blockChamadas">
		<img src="<?php echo $imgPostPrincipal ?>" class="img-responsive" />
		<h2><?php echo $tituloPost;?></h2>
		<p class="lead justificado">
			<?php echo resumo($conteudoPost,150).' [...]';?>
		</p>
		
		<form class="form" action="pages_adm/visualizarPost.php" method="get">
			<input type="hidden" name="tituloPost" value="<?php echo $tituloPost;?>">
			<input type="hidden" name="conteudoPost" value="<?php echo $conteudoPost?>">
			<input type="hidden" name="imgPostPrincipal" value="<?php echo $imgPostPrincipal?>">
			<!--hiddens img-->
			<?php
				for($h=0 ; $h<=10; $h++){
					$imgH[$h] = 'img/design/'.$auxDesign['img'.$h].'.png';
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
</section><!--fim chamada design-->	