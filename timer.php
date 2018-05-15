<?php

if (isset($_POST["start"])){
	$start=time();
	echo date("i:s",$start) . "<br>";
	}
if (isset($_POST["stop"]))
	{$stop=time();
	echo date("i:s",($stop-$start)) . "<br>";
	}
	echo ($stop-$start) . "<br>"; 
?>



<form action="timer.php" method="POST">

<input type="submit" value= "start" name="start">
<input type="submit" value="stop" name="stop">

</form>
