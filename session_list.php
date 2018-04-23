<?php 
// Session lists

session_start();

if (isset($_POST["inp"]))
	{
	$_SESSION["arr"][]=$_POST["inp"];
	}
?>

<FORM ACTION="new_list.php" method=post>
Put what you want here: <input type="text" name="inp">
<input type="submit" value="ADD">

</FORM>

