<!DOCTYPE html>
<html lang="en">
<head>
<title>Loops: for</title>
</head>
<body>



	<?php // while loop example

		$count = 0;
		while($count <= 10) {

			echo $count .",";
			 $count++;// increamet by 1

		}
	
	?>
	<br/>
	<?php 
	for($count = 0; $count <= 10; $count++ ){

		echo $count .",";
	}


	?>
	<br/>
	<?php 
	for($count = 1; $count < 20; $count++ ){
		if($count % 2 == 0){

			echo"{$count} is even.<br/>";

		}else {

				echo"{$count} is odd.<br/>";
		}

		
	}


	?>



		
	

	
</body>
</html>


