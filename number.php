<?php



if (isset($_POST["value"]))
$val = (int)$_POST["value"];
else 
$val=0;


$me=$val*100;

printf("//n %d  //n ",$me);

print("OKAY");



/*
foreach($_POST as $torees => $value) {
$val=$value;
}
*/

?>

<form action="number.php" method=post>

<input type="text" name="value">
<input type="submit" value="send it">

</form>