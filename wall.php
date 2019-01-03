<?php
require_once("conf.php");

$data=[
  'content_id' => '',
  "content_title" => null,
  "content_all" => null,
  "content_time" => '',
];

if (isset($_POST["text"]))
{
$data["content_title"]=$_POST["text"];
$data["content_all"]=$_POST["username"];

$qry="INSERT INTO content (content_id,content_title,content_all,content_time) VALUES(:content_id,:content_title,:content_all,:content_time)";
$ins=$db->prepare($qry);
$ins->execute($data);
}

$qry=$db->query("SELECT * from content");

echo "MESSAGES:";
while ($pr= $qry->fetch()){

  echo $pr["content_all"]." says ".$pr["content_title"]."</br>";

}

?>

<form action = "wall.php" method = "post">
   <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
   <label>Message  :</label><input type = "text" name = "text" class = "box" /><br/><br />
   <input type = "submit" value = " Submit "/><br />
</form>
