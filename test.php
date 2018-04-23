<?php

if (isset($_POST["value"])){
	$quantity=settype($_POST["value"], "integer");
	
}

printf("%d",$quantity);


?>


<FORM METHOD=POST >

<!-- <input type="text" name="value">  </input> -->
<INPUT NAME="quantity" SIZE=2 
 VALUE="<?php echo $quantity;?>">
</form>

