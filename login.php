<?php

session_start();

$passwords = array("chris"   => "ZXsDiRf.VBlWQ",
                   "damon"   => "bQLXBRzdBci7M",
                   "shelley" => "KkTH39mVsoclc",
                   "vanessa" => "69SvRIB9QVukk");

if (!$_POST["username"] or !$_POST["password"]) {
  echo "You must enter your username and password";
  exit;
}

//$salt = substr($passwords[$_POST["username"]], 0, 2);
if (($_POST["password"]) == $passwords[$_POST["username"]]) {
  echo "Login successful";
  $_SESSION["auth_username"] = $_POST["username"];
}
else {
  echo "Login incorrect";
}

?>


<!-- 

BENIM KOD 


<div>

<form action="session.php" method="POST">

<input type="text" name="username">
<input type="password" name="passwd">

<input type="submit" name="Login">

</form>

</div>

<hr>

<div>
<?php 

session_start();

$passes=array("tore"=>"1234",
			  "gok"=>"4321",
);

// ISSET KULLANILMAZ
if (!$_POST["username"] or !$_POST["passwd"]){
	echo "ENTER YOUR PASS AND USERNAME";
	exit;
}



if($_POST["passwd"] == $passes[$_POST["username"]]){
		$_SESSION["auth_user"]=$passes[$_POST["username"]];
		echo "WELCOME HERE " . $_SESSION["auth_user"] . "<br>";
}
else{
	echo "Login incorrect";
}



?>

</div>

-->

