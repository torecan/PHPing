<?php

$host="127.0.0.1";
$username="root";
$passwd="";
$db="test";

$connect=mysqli_connect($host,$username,$passwd,$db);

if ($connect){
	echo "SQL connection successfull";
}



?>