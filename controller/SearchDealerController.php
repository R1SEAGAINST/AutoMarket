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
	
	if(count($carArr) >0){
		$lastPost = $carArr[0];
		// 	 	var_dump($carArr)."<br/>";
		
		$dao = new UserDAO;
		$dealer = $dao->searchDealerByName($dealerName);
		
		
		include '../view/dealer-details.php';
		
	
	
	}else{
	
		$noPosts= "You dont have any post yet";
		include '../view/dealer-list.php';
	}
	
}else{
	include '../view/dealer-list.php';
	
}
