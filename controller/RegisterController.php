<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

if (isset($_POST['reg'])) {
	
	
	try {

		$user = new User(htmlentities(trim($_POST['username'])),
				htmlentities(trim($_POST['email'])),
				htmlentities(trim($_POST['password'])));
		
		$userData = new UserDAO();
		
		$registeredUser = $userData->registerUser($user);
		
		session_start();
		$_SESSION['userid'] = $registeredUser->id;
		$_SESSION['username'] = $registeredUser->username;
		
		header('Location:../view/index.php', true, 302);
	}
	catch (Exception $e) {
		$errorMessage = $e->getMessage();
		include '../view/index.php';
	}
}
?>