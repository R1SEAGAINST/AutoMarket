<?php

class Post {
	private $userid;
	private $car;
	private $postId;

	public function __construct($userid, $car) {
		$this->userid = $userid;
		$this->car = $car;
	}
	
	public function setPostId($postId){
		$this->postId=$postId;
	}
	public function __get($prop) {
		return $this->$prop;
	}
	
}