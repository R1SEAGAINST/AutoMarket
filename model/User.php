<?php
class User {
	private $id;
	private $username;
	private $password;
	private $email;
	
	function __construct($username, $email, $password, $id = null) {
		if (empty($username)) {
			throw new Exception ( 'Empty username' );
		}
		
		if (strlen($password) === 0){
			throw new Exception('Empty passowrd' );
		}
		
		$this->username = $username;
		$this->password = $password;
		$this->id = $id;
		$this->email = $email;
	}
	
	public function __get($prop) {
		return $this->$prop;
	}
}
?>