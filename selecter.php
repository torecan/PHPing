<div>

<?php

if(isset($_POST["sel"]))
	$city=$_POST["sel"];

?>
</div>


<div>
<form action="selecter.php" method="post">

<select name="sel">
	<option value="bursa">BURSA</option>
	<option value="kocaeli">KOCAELİ</option>
	<option value="istanbul">İSTANBUL</option>
	<option value="adana">ADANA</option>
</select>
<input type="submit" value="CHOOSE">
<Div>
	<?php
	echo "$city";
	?>
</Div>


</form>

</div>