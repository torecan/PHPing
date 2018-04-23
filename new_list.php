<?php 

include "session_list.php";

if (is_array($_SESSION["arr"])){
		foreach ($_SESSION["arr"] as $key) {
			echo $key . "<br>";
		}
}



?>