<!DOCTYPE html>
<html lang="en">
<head>
<title>Continue</title>
</head>
<body>



	<?php 

	for ($count = 0 ; $count <= 10 ; $count++) {

		if($count == 5){
			continue;
		}
		echo $count.",";
	}

	?>
	<br/>


	<?php 

	for ($count = 0 ; $count <= 10 ; $count++) {

		if($count% 2 == 0) { continue;}
		echo $count.",";
	}

	?>
	<br/>


	<?php//while loop with continue 

	$count = 0;
	while ($count <= 10){
		if($count == 5){
			$count++;//impotrant 
			continue;
		}
		echo $count.",";
		$count++;

	}

	?>

	<br/>
	
	<?php //loop inside a loop with continue

	for ($i = 0 ; $i <= 5 ; $i++) {

		if($i % 2 == 0) { continue(1);}

		 for($k = 0 ; $k <= 5 ; $k++){
		 	if($k == 3){ continue(2);}
		echo $i ."_" .$k."<br/>";

	 }
	}

	?>

		
	

	
</body>
</html>


