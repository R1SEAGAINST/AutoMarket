<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}
session_start();
	if (isset($_SESSION['user'])) {	
		$user = json_decode($_SESSION['user']);		
	}
	
	
	$latest=array(
			"limit"=>5,
			"order"=>"p.post_time DESC",
			"haspicture"=> 1
	);
	
	$top = array(
			"limit" => 5,
			"order"=>"RAND()",
			"haspicture"=> 1
	);
	
	$postDao = new PostDAO();
	$latestposts=$postDao->search($latest);
	$topposts=$postDao->search($top);	
	include '../view/index.php';	
?>
