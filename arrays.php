<!DOCTYPE html>
<html lang="en">
<head>
<title>Arrays</title>
</head>
<body>


	<?php  

	$numbers = array(4,8,15,16,23,42);

	echo $numbers[0];

	?>

	<br/>
	<?php $mixed = array(6,"fox","dog",array("x","y","z")); ?>
	<?php echo $mixed[2]; ?><br/>
	<?php //echo $mixed[3]; ?><br/>
	<?php //echo $mixed; ?><br/>

	<pre>
	<?php echo print_r($mixed); ?>
	</pre>

	<?php echo $mixed[3][1]; ?><br/>

	<?php echo $mixed[2] = "cat"; ?><br/>
	<?php echo $mixed[4] = "mouse"; ?><br/>
	<?php echo $mixed[] = "horse"; ?><br/>

	<pre>
	<?php echo print_r($mixed); ?>
	</pre>

	<?php 
	//PHP 5.4 added the short array syntax.
	$array = [1,2,3];
	?>

	<pre>
	<?php echo print_r($array); ?>
	</pre>



</body>
</html>
