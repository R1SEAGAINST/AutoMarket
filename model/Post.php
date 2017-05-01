<?php

class Post {
	private $user;
	private $car;
	private $postId;

	function __construct($user, $car) {
		$this->user = $user;

		$this->car = $car;
	}
	
	public function setPostId($postId){
		$this->postId=$postId;
	}
	public function __get($prop) {
		return $this->$prop;
	}
	
}