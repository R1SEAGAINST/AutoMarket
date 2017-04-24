<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

if (isset($_POST['btn-save'])) {
	
	
	try {
		$user = new User(
				htmlentities(trim($_POST['user_email'])),
				htmlentities(trim($_POST['password'])));
		$user->setUsername($_POST['user_name']);
		$user->setPhone($_POST['user_phone']);
		$user->setUserCountry($_POST['user_country']);
		
		$userData = new UserDAO();
		
		$registeredUser = $userData->registerUser($user);
		
		session_start();
		$_SESSION['user'] = json_encode($registeredUser);
		
		header('Location:../view/index.php', true, 302);
	}
	catch (Exception $e) {
		$errorMessage = $e->getMessage();
		include '../view/register.php';
	}
}
?>