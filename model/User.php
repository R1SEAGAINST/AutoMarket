<?php

class User implements JsonSerializable {
	private $id;
	private $username;
	private $password;
	private $email;
	private $phone;
	private $country;
	private $address;
	private $countAllUsers;
	private $countUsersPosts;
	private $car;
	private $post;
	private  $image;
	
	public function setImage($image){
		$this->image = $image;
	
	}
	
	

	public function setPostOfUser(Post $post){
		$this->post = $post;
	
	}
	
	public function setCarOfUser(Car $car){
		$this->car = $car;
		
	}
	
	
	public function setCountUsersPosts($count){
		$count+=0;
	
		if(!(is_int($count))){
			throw new Exception ( 'Count must be only integer!');
	
		}else{
	
			$this->countUsersPosts = $count;
		}
	}
	
	public function setCountAllUsers($count){
		$count+=0;
	
		if(!(is_int($count))){
			throw new Exception ( 'Count must be only integer!');
				
		}else{
	
			$this->countAllUsers = $count;
		}
	}
	
	
	

	
	public function setUserId($id){
		$id+=0;
		
		if(!(is_int($id))){
			throw new Exception ( 'Id must be only integer!');
			
		}else{
	
			$this->id = $id;
		}
	}
	
	
	public function setUsername($username){
		
		if ((strlen($username) < 3 )) {
			throw new Exception ( 'username must be minimum 3 letters!' );
		}else{
			$this->username = $username;
		}
		
	}
	
	
	public function setUserPhone($phone){
		
		//$pattern = '/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/';
		
		if ((strlen($phone) < 6) )  {
			
			throw new Exception ( 'phone must be minimum 6 symbols!');
		}else{
			$this->phone = $phone;
		}
	
	}
	
	public function setUserCountry($country){
		
		$pattern = '/^[a-zA-Z]+$/';
		
		if ((strlen($country) < 2) || (preg_match($pattern, $country) !== 1 )){
			throw new Exception ( 'Country must be minimum 3 letters(only)!' );
		}else{
			$this->country = $country;
		}
	
	}
	
	public function setUserAddress($address){
		$this->address = $address;
	}

	function __construct($email, $password=null, $address=null, $image=null, $id = null) {

		
			$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
		
			if (preg_match($pattern, $email) === 1){
			$this->email = $email;
				// emailaddress is valid
			
			}else{
			throw new Exception('Wrong email!' );
			}
		$this->password = $password;
		$this->id = $id;
		$this->image = $image;
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