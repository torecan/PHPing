<?php

echo time();
echo date("j F");

session_start();

if ($_SESSION["last_visit"]) {
  echo "Date of last visit: ";
  echo date(" F Y, H:i:s", $_SESSION["last_visit"]);
  echo "<br>";
  echo "Total visits: ".$_SESSION["num_visits"];
}
else
  echo "This is your first visit";

$_SESSION["last_visit"] = time();
$_SESSION["num_visits"]++;


?>