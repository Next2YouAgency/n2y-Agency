<section class="col-md-12 chamadaDesign">
<h1 class="col-md-12">Back End</h1>
<hr class="col-md-12">
<?php
	$querySelectBack	=	"SELECT * FROM back_end";
	$exeQrSelectBack	=	mysql_query($querySelectBack)or die(mysql_error());
	
	$linhasBack		=	mysql_num_rows($exeQrSelectBack);
	if($linhasBack <= 0){
		echo'Não Tem nada';
	}else{
		while($auxBack		=	mysql_fetch_assoc($exeQrSelectBack)){
			$tituloPost			=	$auxBack['titulo_post'];
			$imgPostPrincipal	=	'../img/back_end/'.$auxBack['img_principal'].'.png';
			$conteudoPost		=	$auxBack['conteudo_post'];
			#img secundárias#
			for($a=1 ; $a <= 10; $a++){
				$img[$a] = 'img/back_end/'.$auxBack['img'.$a].'.png';
			}
			$videoTutorial		=	'https://www.youtube.com/'.$auxBack['video_tutorial'];
			$autorPost			=	$auxBack['autor'];
			$facebookAutor		=	$auxBack['facebook'];
			$twitterAutor		=	$auxBack['twitter'];
			$youtubeAutor		=	$auxBack['youtube'];
			$linkedinAutor		=	$auxBack['linkedin'];
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
					$imgH[$h] = 'img/back_end/'.$auxBack['img'.$h].'.png';
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
</section><!--fim chamada Back End-->	