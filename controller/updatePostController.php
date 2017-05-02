<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
	
	
}
session_start();

	if (isset($_SESSION['user'])) {
		$user = json_decode($_SESSION['user']);
		if(isset($_GET['updatepostid'])){
		$postId=$_GET['updatepostid'];
		$userId=$user->id;
	//	var_dump($userId);
	//	var_dump($postId);
	}
	
	$dao = new PostDAO;
	$postForUpdate = $dao->getPost((int)$_GET['updatepostid']);
// 			echo "<pre>";
// 			print_r($postForUpdate);
// 			echo "</pre>";	
	include '../view/update-post.php';
	
	}else{
		header("Location: / ");
	}
	?>