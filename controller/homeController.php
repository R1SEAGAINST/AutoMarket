<?php
	session_start();
	
	if ($_SESSION['user']) {		
		include '../view/home.php';
	}
	else
		header('Location:index.php');
?>