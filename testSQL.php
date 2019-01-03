<form action="" method="post">

<input type="text" name="isim" />
<input type="submit" name="Submit" />
</form>


<?php

if (isset($_POST["isim"])){
  $name=trim($_POST["isim"]);
  if (!$name)
  echo "fill it";
  else {
    echo $name;
  }
}


 ?>
