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
	if($_GET['id'] === $user->id){
		$myProfile =true;
	}else{ $myProfile = false;}

}


 if (isset($_GET['id'])) {
 	
	$id = $_GET['id'];

	$posts = new PostDAO;
	$carArr = $posts->listDealersPosts($id);
	$lastPost = $carArr[0];
 	//var_dump($carArr)."<br/>";

	$dao = new UserDAO;
  	$dealer = $dao->infoDealer($id);
  //	var_dump($dealer);
  	include '../view/dealer-details.php';
	//echo json_encode($dao->listAllPostsOfUser($id));

	
  	include '../view/dealer-details.php';

	}else{
		$id=$user->id;
		$posts = new PostDAO;
		$carArr = $posts->listDealersPosts($id);
		$lastPost = $carArr[0];
		//var_dump($carArr)."<br/>";
		
		$dao = new UserDAO;
		$dealer = $dao->infoDealer($id);
	// 	 	var_dump($dealer);
		
		//echo json_encode($dao->listAllPostsOfUser($id));
		
		include '../view/dealer-details.php';
	}



// }else{
// 	header('Location:/');
// }




 ?>