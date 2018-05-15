<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$tmp_name=$_FILES['file']['tmp_name'];

$loc="phpdenemeler1/";


if (move_uploaded_file($tmp_name, $loc.$file))
    echo "Success";


?>


<form action="test2.php" method="POST" enctype="multipart/form-data">
    
    <br> <input type="file" name="file"><br>   
    <input type="submit" value="SUBMIT">
 
</form>