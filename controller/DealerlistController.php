<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';


}
session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}



include '../view/dealer-list.php';


?>


