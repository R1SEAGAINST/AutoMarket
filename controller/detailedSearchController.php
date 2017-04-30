<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}
session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}

if(isset($_POST['submit'])){
	
	
	
	
	
	
	
	
	
}


$postDao = new PostDAO();
$brands = $postDao->getBrands();
include("../view/detailed-search.php");
$post= $postDAO->getPost($postId);


