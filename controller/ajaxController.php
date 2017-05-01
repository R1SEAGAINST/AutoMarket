<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

session_start ();
if (isset ( $_SESSION ['user'] )) {
	if (isset ( $_GET ['brandid'] )) {
		$postDao = new PostDAO ();
		
		$models = $postDao->getModels ( ( int ) $_GET ['brandid'] );
		
		echo json_encode ( $models );
	}
	if(isset($_GET['deleteid'])){
		$user=json_decode($_SESSION['user']);
		$postDao=new PostDAO();
		$result = $postDao->deletePost($_GET['deleteid'],$user->id);
		echo (int)$result;
	}
}
   ?>