<?php

chmod("fileUploaded.php",0777);

if (isset($_POST["done"]))
{
  $cre=touch($_POST["fileName"]);
  if($cre){
    echo $_POST["fileName"]." has been created";
  } else{
    echo "<font color='red'> PROBLEM";
  }
}

?>

<form action="" method="post" >
<h1>YUKLE</h1>
<input type="text"  name="fileName"/>
<input type="submit" name="done" value="UPLOAD">

</form>
