<?php
	function __autoload($className) {
		require_once "../model/" . $className . '.php';	
	}
	
	if (isset($_POST['submit'])) {
		try {
			$user = new User(htmlentities(trim($_POST['email'])), 
							htmlentities(trim($_POST['password'])));
			
			$userData = new UserDAO();
			
			$loggedUser = $userData->loginUser($user);
			
			session_start();
			$_SESSION['user'] = json_encode($loggedUser);
			
//			header('Location:../view/index.php', true, 302);	
			
			header('Location:./homeController.php', true, 302);		
		}
		catch (Exception $e) {
			$errorMessage = $e->getMessage();
			include '../view/log-in.php';
		}
	}
?>