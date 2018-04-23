<?php

if (!isset($_POST["edu"]))
$level=$_POST["primary"];
else
$level=$_POST["edu"];


echo "EDUCATION: $level";


?>

<form action="menu.php" method="post">
<div> EDUCATION LEVEL </div>
<select name="edu">
<option value="primary" <?php if (isset($_POST["edu"])=="primary") echo "selected" ?>> PRIMARY SCHOOL </option>
<option value="high" <?php if (isset($_POST["edu"])=="primary") echo "selected" ?>> HIGH SCHOOL </option>
<option value="bachelor" <?php if (isset($_POST["edu"])=="primary") echo "selected" ?>> BACHELOR </option>
<option value="master" <?php if (isset($_POST["edu"])=="primary") echo "selected" ?>> MASTER </option>

</select>
<input type="submit" value="SEND">
</form>