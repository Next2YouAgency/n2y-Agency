<?php
	ob_start();
	session_start();
	unset($_SESSION['usersLogin']);
	session_destroy($_SESSION['usersLogin']);
	header('Location: ../');
	
	ob_end_flush();
?>