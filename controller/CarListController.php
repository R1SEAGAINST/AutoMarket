<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}
session_start();
$postDao = new PostDAO();
if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}

if(isset($_POST['submit'])){			
// 	echo "<pre>";
// 	print_r($_POST);
	// za obqvi na konkreten user, ot GET mi trea userid
	
	$posts=$postDao->search($_POST);
	
	//print_r($posts);
}else{

		$top = array(
				"limit" => 20,
				"order"=>"RAND()",
				"haspicture"=> 1
		);

$posts=$postDao->search($top);	
// print_r($posts);
}

echo "</pre>";
$brands = $postDao->getBrands();

include '../view/car-list.php';
$post= $postDAO->getPost($postId);


?>
