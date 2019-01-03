<?php

//json_decode php ye cevirir
//json_encode json a cevirir
$jsonAPI=file_get_contents("https://www.doviz.com/api/v1/currencies/all/latest");

$j=json_decode($jsonAPI);

if($j[0]->code == "USD")
  echo $j[0]->selling;

{

}












 ?>
