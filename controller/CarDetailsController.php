<?php 
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}
if(isset($_GET['id'])){
	$postDao = new PostDAO();
	$post = $postDao->getPost((int)$_GET['id']);
	if(!$post){
		header('Location: /');
	}else{
		
		include '../view/car-details.php';
	}

}
?>
