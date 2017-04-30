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
}



   ?>