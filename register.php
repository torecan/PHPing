<?php

$required = array("name"  => "Your Name",
                  "email" => "Email Address");

foreach($required as $field => $label) {
  if (!$_POST[$field]) {
    $err .= "$label is a required field <br>";
  }
}

if ($err) {
  echo $err;

?>
<FORM ACTION="register.php" METHOD=POST>
<TABLE BORDER=0>s
<TR>
  <TD>Your Name</TD>
  <TD><INPUT TYPE=TEXT SIZE=30 NAME="name"
             VALUE="<?php echo $_POST["name"];?>"></TD>
</TR>
<TR>
  <TD>Email Address</TD>
  <TD><INPUT TYPE=TEXT SIZE=30 NAME="email"
             VALUE="<?php echo $_POST["email"];?>"></TD>
</TR>
<TR>
  <TD>Telephone</TD>
  <TD><INPUT TYPE=TEXT SIZE=12 NAME="telephone"
             VALUE="<?php echo $_POST["telephone"];?>"></TD>
</TR>
</TABLE>
<INPUT TYPE=SUBMIT VALUE="Register">
</FORM>

<?php
}
else {
  echo "Thank you for registering";
}
?>
