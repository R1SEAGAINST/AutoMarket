<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';


}
session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}


include '../view/dealer-list.php';

// if ($_SERVER ['REQUEST_METHOD'] === 'GET'){
// 	$dao = new userDAO;
// 	echo json_encode ( $dao->listAllDealers() );



// }


// session_start ();

// if (isset ( $_SESSION ['user'] )) {
// 	$dao = new ContactDAO ();
// 	$userId = json_decode ( $_SESSION ['user'] )->id;

// 	if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
// 		// add new contact
// 		$tuiOtJavaScripta = json_decode ( $_POST ['data'] );

// 		$id = isset($tuiOtJavaScripta->id) ? $tuiOtJavaScripta->id : null;


// 		$bashContact = new Contact( $tuiOtJavaScripta->name,
// 				$tuiOtJavaScripta->phone,
// 				$tuiOtJavaScripta->email,
// 				$userId, $id );
// 		$dao->addContact ( $bashContact );
	// elseif ($_SERVER ['REQUEST_METHOD'] === 'GET') {
		// list all contacts
		//echo json_encode ( $dao->listAllContacts ( $userId ) );
		
		
// 	} elseif ($_SERVER ['REQUEST_METHOD'] === 'DELETE') {
// 		$id = explode('=',file_get_contents('php://input'))[1];
// 		$dao->deleteContact($id, $userId);
// 	}
// } else {
// 	http_response_code ( 401 );
// 	echo '{"error": "not logged in"}';
// }
?>


