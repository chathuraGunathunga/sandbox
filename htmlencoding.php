<!DOCTYPE html>
<html lang="en">
<head>
<title>HTML encoding</title>
</head>
<body>

<?php 
$linktext ="<Click>& learn more";
?>


<a href="">
<?php echo htmlspecialchars($linktext); ?>
</a>

<br/>

<?php // what to use when

$url_page ="php/created/page/url.php";
$param1   ="This is the string with < >";
$param2   ="&#?*$[]+ are bad characters";
$linktext ="<Click> & learn more";

$url = "http://localhost/";
$url .= rawurlencode($url_page);
$url .= "?" ."param1=".urlencode($param1);
$url .= "&" ."param2=".urlencode($param2);
?>
<a href="<?php echo htmlspecialchars($url)?>">
<?php echo htmlspecialchars($linktext); ?>
</a>

</body>
</html>


