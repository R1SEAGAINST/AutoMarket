<?php
$myProfile=false;
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}
session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}


if (isset($_GET['id']) && isset($user->id)){
	if($_GET['id'] == $user->id){
		$myProfile =true;
		
	}else{
		
		$myProfile = false;}

}


 if (isset($_GET['id'])) {
 	
	$id = $_GET['id'];

	$posts = new PostDAO;
	$carArr=array();
	

	$dao = new UserDAO;
	$dealer = $dao->infoDealer($id);

	$carArr = $posts->listDealersPosts($id);
	
	if(count($carArr) >0){
		$lastPost = $carArr[0];
 	 //var_dump($carArr)."<br/>";
 	 	include '../view/dealer-details.php';
	

// 	}else{

// 		$noPosts= "You dont have any post yet";
// 	  	include '../view/dealer-details.php';
 	}

		}else{
			header('Location:/');
		}

		include '../view/dealer-details.php';




>>>>>>> 5d5bb9342be86a84429225ea8ee62505f3d25ee0

 

 
 ?>