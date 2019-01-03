<?php

$db=new PDO("mysql:host=localhost;dbname=test","root","");
  if($db){
    echo "connected";
  }else {
    echo "nein";
  }


?>
