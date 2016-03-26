<!DOCTYPE html>
<html lang="en">
<head>
<title>Second Page</title>
</head>
<body>

<a href="first_page.php">First Page</a>

	<pre>
	<?php
	print_r($_GET);

	?>
	</pre>
	<?php


	$id = $_GET['id'];
	echo $id;

	?>


</body>
</html>