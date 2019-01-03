<?php

require './objectOriented/Database.class.inc';

$connect=con();

if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["username"]) && isset ($_POST["password"])){
	$userName=mysqli_real_escape_string($connect,$_POST["username"]);
	$password=mysqli_real_escape_string($connect,$_POST["password"]);
	if (!empty($username) && !empty($password)){
		$hash_password=$password;
		$query="SELECT `id` FROM `users` WHERE `name`='$userName' AND `passwd`='$hash_password'";
		$result=mysqli_query($connect,$query);
		$fetch=mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
		$id=$fetch['user_id'];
		echo $name;
		if ($count == 1 ) {
			$_SESSION['user_id']=$id;
			login();
		}else{
			$error="WRONG PASSWORD!";
			header('Location: index.php');
		}
	}else{
	 	$error="PLEASE PUT USERNAME VE PASSWORD";
	}
}
?>




<html>

   <head>
      <title>Login Page</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#616666 solid 1px;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style="font-size:11px; color:#cc0000; margin-top:10px"> <?php echo $error; ?></div>

            </div>

         </div>

      </div>

   </body>
</html>
