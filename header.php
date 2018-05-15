
<?php


$destination = "http://www.google.com/";

/*
if (!headers_sent($filename, $line)) {
header("Location: $location");
}
*/
if ($_POST["msn"])
header('Location: http://www.mssazxcsn.com/',"http://www.google.com/");


if ($_POST["bing"])
header('Location: http://www.bing.com/');


if ($_POST["google"])
header('Location: http://www.google.com/');




echo "Headers were sent in line $line of $filename <br>";
echo "<A HREF=\"$destination\">Click here to continue</A>";

?>


<form action="session.php" method="POST">

	<section><input type="submit" value="MSN" name="msn"></section>
	<section><input type="submit" value="Google" name="google"></section>
	<section><input type="submit" value="Bing" name="bing"></section>



</form>



<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>

<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename='downloaded.pdf'");

// The PDF source is in original.pdf
readfile("original.pdf");
?>
