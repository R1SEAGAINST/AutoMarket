<?php
	function __autoload($className) {
		require_once "../model/" . $className . '.php';	
	}
	
	if (isset($_POST['submit'])) {
		try {
			$user = new User(htmlentities(trim($_POST['username'])), 
							htmlentities(trim($_POST['password'])));
			
			$userData = new UserDAO();
			
			$loggedUser = $userData->loginUser($user);
			
			session_start();
			$_SESSION['userid'] = $loggedUser->id;
			$_SESSION['username'] = $loggedUser->username;
			
			header('Location:../view/index.php', true, 302);
		}
		catch (Exception $e) {
			$errorMessage = $e->getMessage();
			include '../view/index.php';
		}
	}
?>