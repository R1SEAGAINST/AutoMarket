<?php

class Post {
	private $user;
	private $car;

	function __construct($user, $car) {
		$this->user = $user;
		$this->car = $car;
	}
}