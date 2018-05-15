<!-- <?php 

include "session_list.php";

if (is_array($_SESSION["arr"])){
		foreach ($_SESSION["arr"] as $key) {
			echo $key . "<br>";
		}
}


?>
-->

<div>

<?php
include "random.php";

if ($realValue > $userValue){
	//echo "$val" . "<br>"; echo "KAZANDIN"; }
	echo "YOUR NUMBER IS: ". "$userValue    " . "$realValue" . " -----> MORE". "<br>";}
elseif ($realValue < $userValue){
	echo "YOUR NUMBER IS: ". "$userValue    " . "$realValue" ." -----> LESS" . "<br>";
}
if ($realValue == $userValue){
	echo "EXACTLY NUMBER IS "."$realValue";
}

?>

</div>


