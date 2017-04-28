<?php
session_start();

	if (isset($_SESSION['user'])) {	
		$user = json_decode($_SESSION['user']);		
	}
	
	include '../view/index.php';
	
?>
