<?php
//if(isset($_GET['logout'])){
	
session_start();
session_destroy();
header('Location:../view/index.php',true,302);
//}
?>