<?php

$offset=0;
	
if(isset($_POST['text']) && isset($_POST['search']) && isset($_POST['replace']) )
	{$text=$_POST['text'];
	$search=$_POST["search"];
	$replace=$_POST["replace"];
	$searchLength=strlen($search);
	


	if (!empty($text) and !empty($search) and !empty($replace))
	{
	//$text= str_replace($search, $replace, $text);
	while($strpos=strpos($text, $search))
		//echo $offset=$strpos+$searchLength . "<br>";
		$text=substr_replace($text, $replace,$strpos,$searchLength);
		}
	else
		echo "fill empty fields! ";


	}

?>


<div>

<form action="find_replace.php" method="POST">


<pre><textarea name="text"> PUT HERE! </textarea> </pre>

<pre>SEARCH:  <input type="text" name="search"></pre>
<pre>REPLACE: <input type="text" name="replace"></pre>
<input type="submit" value="FIND and REPLACE">

</form>

</div>

<hr>

<?php 

echo "$text";

?>
