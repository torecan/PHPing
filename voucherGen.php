<?php
$num='';
if (isset ($_GET["Generate"])){
  $num=genVoucher();
}

function genVoucher(){
$res='JUVE-';
$chars="0123456789ABCDEFGHIJKLMOPRSTUVWXYZ";
$len=strlen($chars)-1;
for ($i=0;$i<10;$i++){
  $res .= $chars[rand(0,$len)];
    }
return $res;
  }



 ?>


<form action="" method="get">
<pre>

VOUCHER: <input type="text" value="<?php
          echo $num; ?>" />
<br>
<input type="submit" value="generator" name="Generate" >

</form>
