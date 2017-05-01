<?php
class Car extends Vehicle implements JsonSerializable {
	private $fabrication;
	private $bodytype;
	private $fueltype;
	private $transmissiontype;
	private $doors;
	private $cilindrics;
	private $hp;
	private $color;
	private $extras;
	private $description;
	private $regyear;
	private $technicalcondition;
	private $kilometers;
	private $eurotype;
	private $price;
	private $countryofregistration;
	private $idmodel;
	
	private $modelname;
	private $brandname;
	
	private static $extrasArray = array(
		"checkbox_abs" => 1,
		"checkbox_eds" => 2,
		"checkbox_esp" => 3,
		"checkbox_air_conditioning" => 4,
		"checkbox_airbag" => 5,
		"checkbox_alarm" => 6,
		"checkbox_panoramic_roof" => 7,
		"checkbox_protection_framework" => 8,
		"checkbox_tow" => 9,
		"checkbox_traction_control" => 10,
		"checkbox_board_computer" => 11,
		"checkbox_steering_wheel" => 12,
		"checkbox_gps" => 13,
		"checkbox_adaptive_lights" => 14,
		"checkbox_smart_tire" => 15,
		"checkbox_aps" => 16,
		"checkbox_distronic" => 17,
		"checkbox_ass" => 18,
		"checkbox_dvd" => 19,
		"checkbox_airmatic" => 20,
		"checkbox_keylessgo" => 21,
		"checkbox_adjustable_wheel" => 22,
		"checkbox_four_wheel" => 23,
		"checkbox_seven_seats" => 24,
		"checkbox_leather_seats" => 25,
		"checkbox_velour_seats" => 26,
		"checkbox_service_history" => 27,
		"checkbox_led_lights" => 28,
		"checkbox_dsa" => 29,
		"checkbox_traction_control" => 30			
	);

	private static $extrasArrayPretty = array(
			1 => "ABS",
			2 => "EDS",
			3 => "ESP",
			4 => "Air conditioning",
			5 => "Air bag",
			6 => "Alarm",
			7 => "Panoramic roof",
			8 => "Protection framework",
			9 => "Tow",
			10 => "Traction control",
			11 => "Board computer",
			12 => "Steering wheel controls",
			13 => "GPS tracking system",
			14 => "Adaptive Lights",
			15 => "Smart Tire",
			16 => "APS",
			17 => "Distronic",
			18 => "ASS",
			19 => "DVD",
			20 => "Airmatic",
			21 => "Keyless Go",
			22 => "Adjustable wheel",
			23 => "Four Wheel Drive",
			24 => "Seven Seats",
			25 => "Leather seats",
			26 => "Velour seats",
			27 => "Service History",
			28 => "LED lights",
			29 => "DSA",
			30 => "Traction Control"
	);
	
	public static function getExtrasPretty($number){
		$extras=array();
		foreach (self::$extrasArrayPretty as $bit => $key) {
				$binary = pow(2, $bit);
				if(($binary & $number) === $binary){
					$extras[]=$key;
				}
				
		}
		return $extras;
	}
	
	public function getExtrasArray() {
		return self::$extrasArray;
	}
	
	public function setExtras($extras){
		$this->extras=$extras;
	}
	
	public function setFabrication($fabrication){
		$fabrication = htmlentities(trim($fabrication));
		if(strlen($fabrication) > 2){
			$this->fabrication = $fabrication;
		}else{
			throw new Exception ( 'Wrong fabrication input!' );
		}
	}
	
	public function setBodyType($bodytype){
		$bodytype = htmlentities(trim($bodytype));
		
		if(in_array($bodytype, array("-", "Cabriolet/Roadster","Small Car","Estete Car","Pickup","Saloon","Van/Minibus","Sports Csar","Other"))){
			$this->bodytype = $bodytype;
		}else{
			throw new Exception ( 'Wrong body type input!' );
		}
	}

	public function setFuelType($fuelType){
		$fuelType = htmlentities(trim($fuelType));
		
		if(in_array($fuelType, array("Diesel","Electric","Petrol","Hybrid"))){
			$this->fueltype = $fuelType;
		}else{
			throw new Exception ( 'Wrong fuel type input!' );
		}
	}

public function setTransmissionType($transType){
		$transType = htmlentities(trim($transType));
		
		if(in_array($transType, array("-", "Manual","Semiautomatic","Automatic"))){
			$this->transmissiontype = $transType;
		}else{
			throw new Exception ( 'Wrong transmission type input!' );
		}
	}
	
public function setDoors($doors){
	$doors= htmlentities(trim($doors));
		
	if(in_array($doors, array("-", "2/3","4/5"))){
			$this->doors = $doors;
		}else{
			throw new Exception ( 'Wrong doors input!' );
		}
	}

public function setCilindrics($cilindrics){
	if(is_numeric($cilindrics) && ($cilindrics > 0) && ($cilindrics < 10000)) {
		$this->cilindrics = $cilindrics;
	}else{
		throw new Exception ( 'Wrong cilindrics input!' );
	}
}

public function setHp($hp){
	if(is_numeric($hp) && ($hp > 0) && ($hp < 1500)){
		$this->hp = $hp;
	}else{
		throw new Exception ( 'Wrong horsepower input!' );
	}
}

public function setColor($color){
	$doors= htmlentities(trim($color));
	
	if(in_array($color, array("-", "Silver","Grey","Metallic","Blue","Brown","Orange","White","Red","Black","Green","Yellow","Gold","Baege"))){
		$this->color = $color;
	}else{
		throw new Exception ( 'Wrong color input!' );
	}
}

public function setDescription($description){
	$description= htmlentities(trim($description));
	if(strlen($description) > 0){
		$this->description= $description;
	}
}

public function setCountryOfRegistration($countryofregistration){
	$countryofregistration= htmlentities(trim($countryofregistration));
	if(strlen($countryofregistration) > 2 && strlen($countryofregistration < 20)){
		$this->countryofregistration= $countryofregistration;
	}
}

	
public function setRegYear($regyear){
		if(is_numeric($regyear) && ($regyear > 1900) && ($regyear < 2020)) {
			$this->regyear = $regyear;
		}else{
			throw new Exception ( 'Wrong year input!' );
		}
	}
	
public function setTechnicalCondition($technicalcondition){
		$technicalcondition= htmlentities(trim($technicalcondition));		
		if(in_array($technicalcondition, array("-", "New","Used","Demaged","Pre-registration"))){
			$this->technicalcondition = $technicalcondition;
		}else{
			throw new Exception ( 'Wrong techcondition input!' );
		}
	}



public function setKilometers($kilometers){
	if(is_numeric($kilometers) && ($kilometers > 0) && ($kilometers < 2000000)){
		$this->kilometers = $kilometers;
	}else{
		throw new Exception ( 'Wrong kilometers input!' );
	}
}

public function setEuroType($eurotype){
	$eurotype= htmlentities(trim($eurotype));
	if(in_array($eurotype, array("-", "Euro1","Euro2","Euro3","Euro4","Euro5","Euro6"))){
		$this->eurotype = $eurotype;
	}else{
		throw new Exception ( 'Wrong eurotype input!' );
	}
}

public function setPrice($price){
	if(is_numeric($price) && ($price >= 0) && ($price < 1000000)){
		$this->price = $price;
	}else{
		throw new Exception ( 'Wrong price input!' );
	}
}

public function setIdModel($idmodel){
	$this->idmodel= $idmodel;
}	

public function __get($property) {
	if (property_exists($this, $property)) {
		return $this->$property;
	}
}



public function setModelName($modelName){
	$this->modelname= $modelName;
}
	
	public function setBrandName($brandName){
		$this->brandname= $brandName;
}
public function jsonSerialize() {
	$result = get_object_vars($this);
	

	return $result;
}

}
