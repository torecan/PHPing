<div>
<?php 
$array = array();

array_fill(0, 10, null)

foreach ($array as $key => $value){
	$array[$key]=rand(1,100);
	}

    return 

?>


<select>
  <?php foreach($array as $key => $value) { ?>
    <option ><?php echo $value ?></option>
  <?php }?>
</select>


</div>

<!-- 

<div>
<form action="test.php" method="POST"> 

<SECTION>
	 <?php  
	 for ($i=1;$i<10;$i++){
	 	echo $i;
	 }
	 ?>
	<option value=1> </option>
	<option value=2> </option>
	<option value=3> </option>

</SECTION>



</div>


-->