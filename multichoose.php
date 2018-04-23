<?php 

include "multi_array.php";


function checkbox_generator($name,$option,$default=array() ){

	if (!is_array($default))
		$default=array();

	foreach ($option as $value => $label) {
		$html .="<input type=checkbox ";
		if (in_array($value, $default))
			$html.= "CHECKED ";
		$html.="name=\"{$name}[] \" value=\"$value\" > ";
		$html.=$label. "<br>";
		printf("%s","$html");
	}
	return ($html);
	}

	$options = array("movie"=> "SINEMA",
					"music"=> "MUZIK",
					"sport"=> "SPOR",
					);
	$html= checkbox_generator("ILGI ALANI",$options,$int);


?>


<form action="multi_array.php" method="post">
<?php print $html ?>
<input type="submit" value="DEVAM">

</form>


