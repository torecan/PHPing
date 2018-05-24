<?php 

require_once "connectDB.php";
$error="";
require_once "core.inc.php";


if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
	echo "EUREKA" . "<a href=logout.php> LOG OUT </a>"; 
}
else {
	include "login.inc.php";
}

//login();


?>


