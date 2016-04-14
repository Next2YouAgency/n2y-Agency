<?php
	session_start();
	
	session_unset('authUser');
	
	header('Location: ../')
?>