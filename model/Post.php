<?php

class Post {
	private $userid;
	private $car;

	function __construct($userid, $car) {
		$this->userid = $userid;
		$this->car = $car;
	}
}