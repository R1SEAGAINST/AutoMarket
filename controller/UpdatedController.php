<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}
session_start();
if (isset($_SESSION['user'])) {
	$oldUser = json_decode($_SESSION['user']);
}

if (isset($_POST['update'])) {


	try {
		$user = new User(
				htmlentities(trim($_POST['user_email'])),
				htmlentities(trim($_POST['password'])),
				htmlentities(trim($_POST['user_address']))
				);
		$user->setUsername(htmlentities(trim($_POST['user_name'])));
		$user->setPhone(htmlentities(trim($_POST['user_phone'])));
		$user->setUserCountry(htmlentities(trim($_POST['user_country'])));
		$user->setUserId($oldUser->id);


		if(isset($_FILES['files']['name'][0])){
			$errors=array();
			foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
				if($_FILES['files']['error'][$key] > 0){
					continue;
				}
				$file_name = $key.$_FILES['files']['name'][$key];
				$file_size =$_FILES['files']['size'][$key];
				$file_tmp =$_FILES['files']['tmp_name'][$key];
				$file_type=$_FILES['files']['type'][$key];
				if($file_size > 2097152){
					$errors[]='File size must be less than 2 MB';
				}
				if(empty($errors)==true){
					$extensions = array("jpeg","jpg","png");
					$name=$_FILES['files']['name'][$key];
					$file_ext=pathinfo($name, PATHINFO_EXTENSION);


					if(in_array($file_ext,$extensions ) === true){

						$img =  (new UserDAO)->randomName($file_ext);
						//$img->randomName($file_ext);
							
						move_uploaded_file($file_tmp,"../assets/images/userimage/{$img}");
						$user->setImage($img);
					}else{
						$errors[]="extension not allowed";
					}
				}
			}
		}

	var_dump($user);

		$userData = new UserDAO();

		$updatedUser = $userData->updateUser($user);

		$updatedUser->setUserId($oldUser->id);
		$_SESSION['user'] = json_encode($updatedUser);

		header('Location:/homeController.php', true, 302);
	}
	catch (Exception $e) {
		$errorMessage = $e->getMessage();
		include '../view/update-profile.php';
	}
}
//include '../view/.php';

