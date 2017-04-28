<?php

class PostDAO implements IPostDAO {
	const PUBLISH_POST_SQL = "INSERT INTO posts
		)
		VALUES (:fabrication, :body_type, :fuel_type, :transmission_type, :doors, :cilindrics, :hp, :color, :extras, :description, :reg_year, :technical_condition, :kilometers, :euro_type, :price, :country_of_registration, :id_model, :id_user)";
	const PUBLISH_POST_IMAGES_SQL = "INSERT INTO images (id_image, post_id) VALUES (?,?)";
	const SELECT_BRANDS_SQL = "SELECT id_brand, brand_name FROM brands ORDER BY brand_name";
	const SELECT_MODELS_SQL = "SELECT id_model, model_name FROM models WHERE id_brand = ? ORDER BY model_name";
	const SELECT_POST_IMAGES_SQL = "SELECT * FROM images WHERE post_id= ?";
	const SELECT_ALL_POSTS_SQL = "SELECT p.id_post, p.body_type, p.fuel_type, p.hp, p.price, p.reg_year, p.kilometers,
								m.model_name, b.brand_name 
								From posts p
								JOIN models m 
								ON p.id_model = m.id_model
							    JOIN brands b
							    ON m.id_brand= b.id_brand
								ORDER BY p.id_post DESC;";

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
}