<div>

<?php

session_start();

if (isset($_POST["yournumber"]))
	$_SESSION["est"][]=$_POST["yournumber"];
		if(is_array($_SESSION["est"]))
			foreach ([$_SESSION[""]] as $userValue) {	
			}
?>
</div>

<div>
<form action="random.php" method="post">
	Your number <input type="text" name="yournumber">
	<input type="submit" value="ESTIMATE! ">
</form>
</div>


