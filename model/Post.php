<?php

class Post {
	private $user;
	private $car;
	private $postId;

// <<<<<<< HEAD
// 	public function __construct($userid, $car) {
// 		$this->userid = $userid;
// =======
	function __construct($user, $car) {
		$this->user = $user;
// >>>>>>> 5bd8fcb3b0652f3fa386e6824948739046be7abb
		$this->car = $car;
	}
	
	public function setPostId($postId){
		$this->postId=$postId;
	}
	public function __get($prop) {
		return $this->$prop;
	}
	
}