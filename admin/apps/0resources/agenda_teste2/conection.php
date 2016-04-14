<?php
	define("SERVER","localhost");
	define("USER","root");
	define("PASS","");
	define("DDB","agenda");
	
	$conection	=	mysql_connect(SERVER,USER,PASS) or die(mysql_error());
	mysql_select_db(DDB,$conection);
?>