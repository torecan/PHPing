<?php


function counter(){

$ip=$_SERVER["REMOTE_ADDR"];

$file="count.txt";

$ip_arr=file("ip.txt");

foreach ($ip_arr as $key)
    echo trim($key);


fclose($ip_handle);

$handle= fopen($file, 'r');
$coun=fread($handle, filesize($file));
fclose($handle);




echo $ip." connected" .$coun++ . "times";


$handle= fopen($file, 'w');
fwrite($handle, $coun);
fclose($handle);


}


?>


