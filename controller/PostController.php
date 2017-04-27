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
			

			$userid = $user->id;
			
			
			$post = new Post($userid, $car);
			
			$postDao = new PostDAO();
			
			
		
			$published = $postDao->publish($userid, $car);
			
		} catch (Exception $e) {
				$errorMessage = $e->getMessage();
		}
	}
	
	$postDao = new PostDAO();
	$brands = $postDao->getBrands();
	include '../view/add-vehicle.php';
} else{
	header('Location:./homeController.php', true, 302);
}

