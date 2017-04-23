<?php

class User implements JsonSerializable {
	private $id;
	private $username;
	private $password;
	private $email;
	private $phone;
	private $country;
	private $address;

	function __construct($username, $email, $password, $phone, $country, $address=null, $id = null) {

// 		if (strlen($username) < 3) {
// 			throw new Exception ( 'usernme must be minimum 3 symbols!' );
// 		}

// 		if (strlen($password) < 8){
// 			throw new Exception('Password must be minimum 8 symbols!' );
// 		}

// 		if (strlen($email) === 0){
			
// 			$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
			
// 			$emailaddress = 'test@gmail.com';
			
// 			if (preg_match($pattern, $emailaddress) === 1);
// 				// emailaddress is valid
			
			
// 			throw new Exception('Empty email!' );
// 		}

// 		if (strlen($phone) < 0){
// 			throw new Exception('Empty phone!' );
// 		}

// 		if (strlen($country) === 0){
// 			throw new Exception('Empty country!' );
// 		}



		$this->username = $username;
		$this->password = $password;
		$this->id = $id;
		$this->email = $email;
		$this->phone = $phone;
		$this->country = $country;
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