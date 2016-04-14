<?php
echo $nome		=	$_POST['nome']."<br>";
echo $descr		=	$_POST['descr']."<br>";
echo $arma_usada	=	$_POST['arma_usada']."<br>";
echo $atk		=	$_POST['atk']."<br>";
echo $def		=	$_POST['def']."<br>";
echo $res		=	$_POST['res']."<br>";
echo $dex		=	$_POST['dex']."<br>";
echo $intl		=	$_POST['intl']."<br>";
echo $spd		=	$_POST['spd']."<br>";
echo "MP: ".$mp			=	$res+$dex+$intl."<br>";
echo "HP: ".$hp			=	$atk+$def+$spd."<br>";

for($i = 0; $i <=10; $i++){
	$hab[$i]	=	$_POST["hab$i"];
	echo '<pre>';
	print_r ($hab);
	echo '</pre>';
}
for($a = 0; $a <=10; $a++){
	$tec[$a]	=	$_POST["tec$a"];
	echo '<pre>';
	print_r ($tec);
	echo '</pre>';
}

include 'upload.php';


$queryCadastrarBestiario	=	"INSERT INTO bestiario(nome,descr,img,arma_usada,atk,def,res,dex,intl,spd,mp,hp,hab1,hab2,hab3,hab4,hab5,hab6,hab7,hab8,hab9,hab10,tec1,tec2,tec3,tec4,tec5,tec6,tec7,tec8,tec9,tec10,item) VALUES ('$nome','$descr','$arma_usada','$atk','$def','$res','$dex','$intl','$spd','$mp','$hp','$hab1','$hab2','$hab3','$hab4','$hab5','$hab6','$hab7','$hab8','$hab9','$hab10','$tec1','$tec2','$tec3','$tec4','$tec5','$tec6','$tec7','$tec8','$tec9','$tec10')";
mysql_query($queryCadastrarBestiario);
?>