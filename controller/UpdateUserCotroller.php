<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';


}
session_start();

if (isset($_SESSION['user'])) {
	$user = json_decode($_SESSION['user']);
}
$id=$user->id;

$dao = new UserDAO;
$userForUpdate = $dao->userForUpdate($id);

//var_dump($userForUpdate);

include '../view/update-profile.php';


?>
