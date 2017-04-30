<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';	
}

session_start();

if (isset($_SESSION['user'])) {
	
	$user = json_decode($_SESSION['user']);
	
	

	if(isset($_POST['submit'])){

		try {
			$car = new Car();
			$extrasArray = $car->getExtrasArray();		
			
			$extras = 0;
			foreach ($extrasArray as $key => $bit) {
				if (isset($_POST[$key]) && $_POST[$key] == 1) {
					$binary = pow(2, $bit);
					$extras = $extras | $binary;
// 					var_dump("bit: ".$bit);
// 					var_dump("Binary: ".$binary);
// 					var_dump("Extras: ".$extras);
				}
			}
			
			
			/*
			 0 = 0 | 2
			 
			 00
			 10
			 
			 010
			 100
			 
			 00110
			 10000
			 
			 2070 ->
			 
			 */
				
			$car->setFabrication($_POST['fabrication']);
			$car->setBodyType($_POST['bodyType']);
			$car->setFuelType($_POST['fuelType']);
			$car->setTransmissionType($_POST['transmission']);
			$car->setDescription($_POST['description']);
			$car->setDoors($_POST['doors']);
			$car->setCilindrics($_POST['cilindrics']);
			$car->setHp($_POST['hp']);
			$car->setColor($_POST['color']);
			$car->setExtras($extras);
			$car->setRegYear($_POST['year']);
			$car->setTechnicalcondition($_POST['condition']);
			$car->setKilometers($_POST['kilometers']);
			$car->setEuroType($_POST['euroType']);
			$car->setPrice($_POST['price']);
			$car->setCountryOfRegistration($_POST['country']);
			$car->setIdModel($_POST['model']);
			
				
			$post = new Post($userid, $car);			
			$postDao = new PostDAO();
			$postId = $postDao->publish($user, $car);
	
				
			if(isset($_FILES['files']['name'][0])){	
				$errors=array();
					foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
						if($_FILES['files']['error'][$key] > 0){
							continue;
						}
						$file_name = $key.$_FILES['files']['name'][$key];
						$file_size =$_FILES['files']['size'][$key];
						$file_tmp =$_FILES['files']['tmp_name'][$key];
						$file_type=$_FILES['files']['type'][$key];
							if($file_size > 2097152){
								$errors[]='File size must be less than 2 MB';
							}
							if(empty($errors)==true){
							$extensions = array("jpeg","jpg","png");
							$name=$_FILES['files']['name'][$key];
							$file_ext=pathinfo($name, PATHINFO_EXTENSION);
					
							
								if(in_array($file_ext,$extensions ) === true){		
									$img = $postDao->randomName($file_ext);
									
									move_uploaded_file($file_tmp,"../assets/images/postimage/{$img}");
									$insertImage= $postDao->postImage($img, $postId);			
									}else{
										$errors[]="extension not allowed";
									}
								}
							}
						}
						
			
		} catch (Exception $e) {
				$errorMessage = $e->getMessage();
	}
		 header('Location:/CarDetailsController.php?id='.$postId);
	}
	$postDao = new PostDAO();
	$brands = $postDao->getBrands();
	include '../view/add-vehicle.php';
} else{
	 header('Location:/homeController.php', true, 302);
}

