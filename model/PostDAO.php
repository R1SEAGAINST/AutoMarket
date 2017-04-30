<?php

class PostDAO implements IPostDAO {
	const PUBLISH_POST_SQL = "INSERT INTO posts
		(fabrication, body_type, fuel_type, transmission_type, doors, cilindrics, hp, color, extras, description, reg_year, technical_condition, kilometers, euro_type, price, country_of_registration, id_model, id_user)
		VALUES (:fabrication, :body_type, :fuel_type, :transmission_type, :doors, :cilindrics, :hp, :color, :extras, :description, :reg_year, :technical_condition, :kilometers, :euro_type, :price, :country_of_registration, :id_model, :id_user)";
	const PUBLISH_POST_IMAGES_SQL = "INSERT INTO images (id_image, post_id) VALUES (?,?)";
	const SELECT_BRANDS_SQL = "SELECT id_brand, brand_name FROM brands ORDER BY brand_name";
	const SELECT_MODELS_SQL = "SELECT id_model, model_name FROM models WHERE id_brand = ? ORDER BY model_name";
	const SELECT_POST_IMAGES_SQL = "SELECT * FROM images WHERE post_id= ?";

	const GET_ALL_POSTS_OF_USER_SQL = "SELECT p.id_post , p.id_model, m.model_name, b.brand_name, p.reg_year, p.body_type,
							 p.country_of_registration, p.kilometers, p.price, p.fuel_type, p.hp, p.id_user
				
							 FROM posts p Join models m
							 on p.id_model = m.id_model JOIN brands b
							 ON m.id_brand = b.id_brand JOIN users u
							 ON p.id_user = u.user_id
							 WHERE u.user_id = ?
							 ORDER BY p.id_post DESC";
	
	
	const GET_ALL_POSTS_BY_NAME_SQL = "SELECT p.id_post , p.id_model, m.model_name, b.brand_name, p.reg_year, p.body_type,
							 p.country_of_registration, p.kilometers, p.price, p.fuel_type, p.hp, p.id_user
				
							 FROM posts p Join models m
							 on p.id_model = m.id_model JOIN brands b
							 ON m.id_brand = b.id_brand JOIN users u
							 ON p.id_user = u.user_id
							 WHERE u.user_name LIKE ?
							 ORDER BY p.id_post DESC";
	
	
	public function publish($userid, Car $car) {
		$db = DBConnection::getDb();
		

		$pstmt = $db->prepare(self::PUBLISH_POST_SQL);
		$pstmt->execute(array(
				':fabrication' => $car->__get('fabrication'),
				':body_type' => $car->__get('bodytype'),
				':fuel_type' => $car->__get('fueltype'),
				':transmission_type' => $car->__get('transmissiontype'),
				':doors' => $car->__get('doors'),
				':cilindrics' => $car->__get('cilindrics'),
				':hp' => $car->__get('hp'),
				':color' => $car->__get('color'),
				':extras' => $car->__get('extras'),
				':description' => $car->__get('description'),
				':reg_year' => $car->__get('regyear'),
				':technical_condition' => $car->__get('technicalcondition'),
				':kilometers' => $car->__get('kilometers'),
				':euro_type' => $car->__get('eurotype'),
				':price' => $car->__get('price'),
				':country_of_registration' => $car->__get('countryofregistration'),
				':id_model' => $car->__get('idmodel'),
				':id_user' => $userid
		));
	}
	
	public function postImage($imgs){
		$db = DBConnection::getDb();
		$sql = $db->query(self::PUBLISH_POST_IMAGES_SQL);
		
	}
	
	
	public function getBrands() {
		$db = DBConnection::getDb();

		$sql = $db->query(self::SELECT_BRANDS_SQL);

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getModels($brandid) {
		$db = DBConnection::getDb();

		$pstmt = $db->prepare(self::SELECT_MODELS_SQL);
		$pstmt->execute(array($brandid));
			
		return $pstmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function listDealersPosts($id){
	
		$db = DBConnection::getDb();
		
		
			
		$pstmt = $db->prepare(self::GET_ALL_POSTS_OF_USER_SQL);
		$pstmt->execute(array($id));
	
		$result=array();
	
			
		$posts = $pstmt->fetchAll(PDO::FETCH_ASSOC);
	
	
	
		foreach ($posts as $post){
	
			$carForList = new Car;
			$carForList->setKilometers($post['kilometers']);
			$carForList->setHp($post['hp']);
			$carForList->setCountryOfRegistration($post['country_of_registration']);
			$carForList->setPrice($post['price']);
			$carForList->setRegYear($post['reg_year']);
			$carForList->setBodyType($post['body_type']);
			$carForList->setFuelType($post['fuel_type']);
			$carForList->setIdModel($post['id_model']);
			$carForList->setModelName($post['model_name']);
			$carForList->setBrandName($post['brand_name']);
			$postForList= new Post($id, $carForList);
			$postForList->setPostId($post['id_post']);
	
	
	
			$result[] = $postForList;
	
		}
	
		return $result;
	}
	
	
	public function listDealersPostsByName($dealerName){
	
		$db = DBConnection::getDb();
	
	
			
		$pstmt = $db->prepare(self::GET_ALL_POSTS_BY_NAME_SQL);
		$pstmt->execute(array($dealerName));
	
		$result=array();
	
			
		$posts = $pstmt->fetchAll(PDO::FETCH_ASSOC);
	
	
	
		foreach ($posts as $post){
	
			$carForList = new Car;
			$carForList->setKilometers($post['kilometers']);
			$carForList->setHp($post['hp']);
			$carForList->setCountryOfRegistration($post['country_of_registration']);
			$carForList->setPrice($post['price']);
			$carForList->setRegYear($post['reg_year']);
			$carForList->setBodyType($post['body_type']);
			$carForList->setFuelType($post['fuel_type']);
			$carForList->setIdModel($post['id_model']);
			$carForList->setModelName($post['model_name']);
			$carForList->setBrandName($post['brand_name']);
			$postForList= new Post($post['id_user'], $carForList);
			$postForList->setPostId($post['id_post']);
	
	
	
			$result[] = $postForList;
	
		}
	
		return $result;
	}
	
	
}