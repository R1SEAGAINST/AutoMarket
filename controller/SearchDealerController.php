<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';
}
session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}

if(isset($_GET['dealer_name']) && !empty($_GET['dealer_name'])){
	$dealerName = $_GET['dealer_name'];
	
	

	
	$posts = new PostDAO;
	$carArr = $posts->listDealersPostsByName($dealerName);
	$lastPost = $carArr[0];
// 	 	var_dump($carArr)."<br/>";
	
	$dao = new UserDAO;
	$dealer = $dao->searchDealerByName($dealerName);
	// 	var_dump($dealer);
	
	//echo json_encode($dao->listAllPostsOfUser($id));
	
	
	
}
include '../view/dealer-details.php';
