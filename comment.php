<?php>

$comment=" Hi \n\n ";

foreach($_POST as $comment => $value) {
 	echo "<PRE>";
 	echo "Comment: " . $comment;
 	echo "<PRE>";
 	echo "Value". $value;
 	echo "<PRE>";
}

echo "$comment";


?>


<form action="comment.php" method="post">

COMMENT: <textarea name="textarea"> </textarea>

<input type="submit" Value="PRINT">

</form>

