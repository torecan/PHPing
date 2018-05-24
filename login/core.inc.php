<?php

ob_start();
session_start();

$ref=$_SERVER['HTTP_REFERER'];

function login(){
		$done=TRUE;
		header('Location: login.inc.php');
		
}


?>


<H1>LOGIN ! </H1>
