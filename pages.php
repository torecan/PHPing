<?php

function pageShower($totalPost){
if (isset($_GET["page"])){
  $page=$_GET["page"];
  if(empty($page) || !is_numeric($page)){
   $page=1;
 }


$pageShown=2;
$pageNum=ceil($totalPost/$pageShown);
$beginOn=($page*$pageShown)-$pageShown;
$array=array($pageShown,
             $beginOn,
             $pageNum,$page);

}
return $array;

}



 ?>
