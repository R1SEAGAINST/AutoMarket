<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';


}
session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}
// if ($_SERVER ['REQUEST_METHOD'] === 'GET'){
// 	$dao = new userDAO;
// 	echo json_encode ($dao->listAllDealers());



// }


include '../view/dealer-list.php';


?>


