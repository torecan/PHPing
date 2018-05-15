<?php

/* 
 I. FILE WRITING CODE

 *  */

if (isset($_POST['name'])){
    $name=$_POST['name'];
       $handle=fopen('name.txt','a');
       fwrite($handle,$name."\n");
       fclose($handle);
}

?>



<form action="fileHandler.php" method="POST">
    
    PUT : <input type="text" name="name"> 
    
    <input type="submit" value="send">
    
    
    
</form>



<?php

/* 
 * 
II . FILE WRITING CODE
 *  */

if (isset($_GET["name"]) ){
    $name=$_GET["name"];
    
    if (!empty($name)){
        $file= fopen ("name.txt", 'a');
        $str= "GÜN ALINMIŞTIR!" . "BUGUN". $name."  \n"; 
        fwrite($file, $str);
        echo $str;
    fclose($file);}
    else
        echo "PLEASE FILL IN THE BLANKS!";
    
}


?>



<form action="test2.php" method="GET">
    
    DAY: <br> <input type="text" name="name"><br>
    
    <input type="submit" value="SUBMIT">
 
    
</form>