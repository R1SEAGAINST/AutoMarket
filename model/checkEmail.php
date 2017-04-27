<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

if (isset($_GET['email'])){
	
$emailForCheck = $_GET['email'];
$db = DBConnection::getDb();
$sql = $db->query("SELECT * FROM users WHERE user_email = ".$db->quote($emailForCheck)."");
	if ($sql->rowCount() > 0){
		echo "true";
	}else{ echo "false";}


}