<?php

session_start();


if (isset($_POST["word"]))
  $_SESSION["words"][] = $_POST["word"];

if (is_array($_SESSION["words"])) {
  foreach($_SESSION["words"] as $word) {
    echo $word . "<br>";
  }
}


?>
<FORM ACTION="session_array.php" METHOD=POST>
Enter a word: <INPUT SIZE="10" NAME="word">
<INPUT TYPE=SUBMIT VALUE="Add word to list">
</FORM>