<?php 
//Session use cookies which use headers
//Must start before any HTML output
//Unless output buffring is turnd on.
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Session</title>
</head>
<body>

	<?php 

		$_SESSION["first_name"] = "Saman";
		$name = $_SESSION["first_name"];
		echo $name;
	?>
	

</body>
</html>


