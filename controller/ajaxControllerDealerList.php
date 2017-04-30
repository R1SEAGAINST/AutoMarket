<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

session_start ();
if (isset ( $_SESSION ['user'] )) {
	
}

if ($_SERVER ['REQUEST_METHOD'] === 'GET'){
	$dao = new userDAO;
	echo json_encode ( $dao->listAllDealers() );



}

   ?>