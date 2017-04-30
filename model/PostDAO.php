<?php

class PostDAO implements IPostDAO {
	const PUBLISH_POST_SQL = "INSERT INTO posts
		(fabrication, body_type, fuel_type, transmission_type, doors, cilindrics, hp, color, extras, description, reg_year, technical_condition, kilometers, euro_type, price, country_of_registration, id_model, id_user)
		VALUES (:fabrication, :body_type, :fuel_type, :transmission_type, :doors, :cilindrics, :hp, :color, :extras, :description, :reg_year, :technical_condition, :kilometers, :euro_type, :price, :country_of_registration, :id_model, :id_user)";
	const PUBLISH_POST_IMAGES_SQL = "INSERT INTO images (image_name, fk_post) VALUES (?,?)";
	const SELECT_BRANDS_SQL = "SELECT id_brand, brand_name FROM brands ORDER BY brand_name";
	const SELECT_MODELS_SQL = "SELECT id_model, model_name FROM models WHERE id_brand = ? ORDER BY model_name";
	const SELECT_POST_IMAGES_SQL = "SELECT image_name FROM images WHERE fk_post= ?";
	const SELECT_POST_SQL = "SELECT b.brand_name,m.model_name,u.user_email,p.reg_year,p.cilindrics,p.hp,p.body_type,p.kilometers,p.price FROM posts p	
								JOIN models m ON m.id_model = p.id_model
								JOIN brands b ON b.id_brand = m.id_brand
								JOIN users u ON u.user_id = p.id_user
                                WHERE p.id_post = ?
							";
	
	
	
	const SELECT_LIST_IMAGE_SQL ="SELECT";
	const SELECT_LIST_POSTS_SQL = "SELECT i.image_name,p.id_post,b.brand_name,m.model_name,u.user_email,p.reg_year,p.cilindrics,p.hp,p.body_type,p.kilometers,p.price FROM posts p
								
								JOIN models m ON m.id_model = p.id_model
								JOIN brands b ON b.id_brand = m.id_brand
								JOIN users u ON u.user_id = p.id_user
                                JOIN images i ON i.fk_post = p.id_post
								WHERE {{WHERE}}
								GROUP BY p.id_post
								ORDER BY p.id_post DESC
								LIMIT 3
";
	

	public function publish(User $user, Car $car) {
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
				':id_user' => $user->id
		));
		
		return $db->lastInsertId();
	}
	
	public function randomName($extension){
	while(true){
		$random = sha1(rand(0,PHP_INT_MAX));
		$name = $random. "." .$extension;
			if(!file_exists($name)){
				return $name;
			}
		}	
	}
	
	public function postImage($image_name, $fk_post){
		$db = DBConnection::getDb();
		$sql = $db->prepare(self::PUBLISH_POST_IMAGES_SQL);	
		$sql->execute(array(
				$image_name,
				$fk_post
		));
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


	private function getPostInfo($postId){
		$db = DBConnection::getDb();
		$pstmt= $db->prepare(self::SELECT_POST_SQL);
		$pstmt->execute(array($postId));
		
		return $pstmt->fetch(PDO::FETCH_ASSOC);	
	}
	
	private function getPostImages($postId){
		$db = DBConnection::getDb();
		$pstmt= $db->prepare(self::SELECT_POST_IMAGES_SQL);
		$pstmt->execute(array($postId));
		
		return $pstmt->fetchAll(PDO::FETCH_COLUMN);
	}
	
	public function getPost($postId){
		$thepost = $this->getPostInfo($postId);
		if(!$thepost){
			return false;
		}
		$postimages = $this->getPostImages($postId);
		
		$user = new User($thepost['user_email']);
		$user->setUserId($thepost['user_id']);
		$user->setUserPhone($thepost['user_phone']);
		$user->setUserCountry($thepost['user_country']);
		$user->setUserAddress($thepost['user_address']);
		
		$car = new Car();
		$car->setFabrication($thepost['fabrication']);
		$car->setBodyType($thepost['body_type']);
		$car->setFuelType($thepost['fuel_type']);
		$car->setTransmissionType($thepost['transmission_type']);
		$car->setDescription($thepost['description']);
		$car->setDoors($thepost['doors']);
		$car->setCilindrics($thepost['cilindrics']);
		$car->setHp($thepost['hp']);
		$car->setColor($thepost['color']);
		$car->setExtras($thepost['extras']);
		$car->setRegYear($thepost['reg_year']);
		$car->setTechnicalcondition($thepost['technical_condition']);
		$car->setKilometers($thepost['kilometers']);
		$car->setEuroType($thepost['euro_type']);
		$car->setPrice($thepost['price']);
		$car->setCountryOfRegistration($thepost['country_of_registration']);
		$car->brand=$thepost['brand_name'];
		$car->model=$thepost['model_name'];
		
		$post=new Post($user,$car);
		$post->pictures= $this->getPostImages($postId);
		$post->time = $thepost['post_time'];
		
		return $post;
	}
	
	public function search($input){
		$where = array(1);
		$default = array("-","Select");
		$db = DBConnection::getDb();
		
		
		if(isset($input['manufacturer']) && (!in_array($input['manufacturer'], $default))){
			$where[]="m.id_brand=" . (int) $input['manufacturer'];
		}
		
		if(isset($input['model']) && (!in_array($input['model'], $default))){
			$where[]="m.id_model=" . (int) $input['model'];
		}
		
		if(isset($input['euroType']) && (!in_array($input['euroType'], $default))){
			$where[]="p.euro_type=" . $db->quote($input['euroType']);
		}
		
		if(isset($input['bodyType']) && (!in_array($input['bodyType'], $default))){
			$where[]="p.body_type=" . $db->quote($input['bodyType']);
		}
		
		if(isset($input['fuelType']) && (!in_array($input['fuelType'], $default))){
			$where[]="p.fuel_type=" . $db->quote($input['fuelType']);
		}
		
		if(isset($input['transmission']) && (!in_array($input['transmission'], $default))){
			$where[]="p.transmission_type=" . $db->quote($input['transmission']);
		}
		
		if(isset($input['doors']) && (!in_array($input['doors'], $default))){
			$where[]="p.doors=" . $db->quote($input['doors']);
		}
		
		if(isset($input['color']) && (!in_array($input['color'], $default))){
			$where[]="p.color=" . $db->quote($input['color']);
		}
		
		if(isset($input['country']) && (!in_array($input['country'], $default))){
			$where[]="p.country_of_registration=" . $db->quote($input['country']);
		}
		
		$min = max(1900, (int) $input['min-year']);
		if($input['max-year'] != "Year"){
			
		
		$max = min((int) $input['max-year'], date("Y"));
		}else{
			$max= date("Y");
		}
		$where[]="p.reg_year BETWEEN " . $min . " AND " . $max;
		
		if(isset($input['condition']) && (!in_array($input['condition'], $default))){
			$where[]="p.technical_condition=" . $db->quote($input['condition']);
		}
		
		if(isset($input['kilometers']) && (!in_array($input['kilometers'], $default))){
			if($input['kilometers'] == 9999){
			$where[]="p.kilometers <" . $db->quote($input['kilometers']);
			}else{
				$where[]="p.kilometers >" . $db->quote($input['kilometers']);
				
			}
		}
		
		$minprice = max(0, (int) $input['min-price']);
		$maxprice = min((int) $input['max-price'], 200000);
		$where[]="p.price BETWEEN " . $minprice . " AND " . $maxprice;
		
		
		
		$car = new Car();
		$extrasArray = $car->getExtrasArray();
		
		$extras = 0;
		foreach ($extrasArray as $key => $bit) {
			if (isset($input[$key]) && $input[$key] == 1) {
				$binary = pow(2, $bit);
				$extras = $extras | $binary;
			}
		}
		
		if($extras > 0){
			$where[]="p.extras & {$extras} = {$extras}";
		}
		
		if(isset($input['userid'])){
			$where[]= "p.id_user=" . (int) $input['userid'];
		}
		
		print_r($where);
		
		$sql=str_replace("{{WHERE}}",implode(" AND ",$where), self::SELECT_LIST_POSTS_SQL);
		print_r($sql);
		$stmt=$db->query($sql);
		return $stmt->fetchAll(PDO::FETCH_OBJ);
		
	}
}



