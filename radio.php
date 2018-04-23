<?php
if (isset($_POST["shipping"]))
  $shipping = $_POST["shipping"];

echo "Your order will be sent via $shipping shipping";
?>
<FORM ACTION="radio.php" METHOD=POST>


<INPUT TYPE="RADIO" NAME="shipping" VALUE="economy"
 <?php if ($shipping == "economy") echo "CHECKED";?>> Economy


<INPUT TYPE="RADIO" NAME="shipping" VALUE="standard"
 <?php if ($shipping == "standard") echo "CHECKED";?>> Standard


<INPUT TYPE="RADIO" NAME="shipping" VALUE="express"
 <?php if ($shipping == "express") echo "CHECKED";?>> Express
<INPUT TYPE="SUBMIT" VALUE="Change shipping option">
</FORM>
