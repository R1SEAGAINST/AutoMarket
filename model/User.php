<?php

class User implements JsonSerializable {
	private $id;
	private $username;
	private $password;
	private $email;
	private $phone;
	private $country;
	private $address;
	
	
	
// 	public function __set($propName, $value){
// 		$this->$propName=$value;
// 	}

	
	public function setUserId($id){
	
			$this->id = $id;
	
	
	}
	
	
	public function setUsername($username){
		if (strlen($username) < 3) {
			throw new Exception ( 'usernme must be minimum 3 symbols!' );
		}else{
			$this->username = $username;
		}
		
	}
	
	
	public function setPhone($phone){
		if (strlen($phone) < 6) {
			throw new Exception ( 'phone must be minimum 6 symbols!' );
		}else{
			$this->phone = $phone;
		}
	
	}
	
	public function setUserCountry($country){
		if (strlen($country) < 2) {
			throw new Exception ( 'ountry must be minimum 4 symbols!' );
		}else{
			$this->country = $country;
		}
	
	}

	function __construct($email, $password, $address=null, $id = null) {

		
			$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
		
			if (preg_match($pattern, $email) === 1){
			$this->email = $email;
				// emailaddress is valid
			
			}else{
			throw new Exception('Wrong email!' );
			}
			

			if (strlen($password) < 8){
				throw new Exception('Password must be minimum 8 symbols!' );
			}
			else{$this->password = $password;}
				
		

		$this->id = $id;
		$this->address = $address;
		
		

	}


	public function jsonSerialize() {
		$result = get_object_vars($this);
		unset($result['user_password']);
		return $result;
	}

	public function __get($prop) {
		return $this->$prop;
	}
}


?>