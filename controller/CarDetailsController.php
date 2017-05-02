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
		
		$top = array(
				"limit" => 3,
				"order"=>"RAND()",
				"haspicture"=> 1
		);
		
		$postDao = new PostDAO();
		$topposts=$postDao->search($top);	
// 	echo "<pre>";
// 		print_r($post);
// 		print_r($topposts);
// 		echo "</pre>";
		include '../view/car-details.php';
	}

}
?>
