<?php
//REMEMBER: Setting cookies must be before *any* HTML output
//unless output buffering is turned on.
$name = "test";
$value = "hello";
$expire = time()+(60*60*24*7);//add seconds
setcookie($name,$value,$expire);

//setcookie($name);
//setcookie($name,null,$expire);
//setcookie($name,null,time() - 3600);
//Kevin's recommend for unsetting:
//setcookie($name,null,time() - 3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Cookies</title>
</head>
<body>

	<pre>
	<?php

		print_r($_COOKIE);//debugging purpose


	?>
	</pre>
	<?php

	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] :"";
	echo $test;
	?>

</body>
</html>


