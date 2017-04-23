<?php
	session_start();
	
	if ($_SESSION['user']) {		
		include '../view/index.php';
	}
	else
	//	header('Location:index.php');
?>