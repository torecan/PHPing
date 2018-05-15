
<?php
/*
$data=file_get_contents("C://Users//TOR/Desktop//PHP_tutorials.txt");

echo $data;
*/
?>


<?php

$data=$_POST["text"];
file_put_contents("test.txt", $data);

?>




<form action="session.php" method="post">

<textarea name="text">PUT YOUR TEXT HERE </textarea>
<input type="submit" value="SEND">

</form>

