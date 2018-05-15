<?php

if (isset($_POST["roll"])){

	$num=rand(1,6);
	$cmp=rand(1,6);
	echo $num ."   ".$cmp;
	if ($cmp>$num)
		echo "LOST";
	else if($cmp<$num)
		echo "WIN";
	else
		echo "DRAW";
}


?>

<div>

<form action="dice.php" method="POST">

<input type="submit" name="roll" value="roll">

</form>

</div>




