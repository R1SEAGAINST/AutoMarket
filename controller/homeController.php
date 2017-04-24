<?php
session_start();

if ($_SESSION['user']) {
	
	header('Location:../view/index.php');
}
else
	header('Location:../view/index.php');
	?>