<!DOCTYPE html>
<html>
<head><meta charset="utf-8"></head>
<title> XSS Attack </title>
<body>
<h1 align="center"> Search Coupons </h1>
<table align="center">
<tr><td>
<form action="index.php" method="get">
	<input type="text" name="search" placeholder="Coupon Number" />
	<input type="submit" value="Search" />
</form>
</td></tr>
</table>
<br />
<br />
<p align="center">
<?php
if(isset($_GET["search"]))
{
	echo "The results of your search for: ".$_GET["search"];
	echo "<br /><br /> <i>Sorry No Results Found! </i>";
	//echo htmlspecialchars($_GET["search"], ENT_QUOTES, 'utf-8');
	//echo htmlentities($_GET["search"], ENT_QUOTES, 'utf-8');
}
?>
</p>
<h3 align="center"> Sushma Yellapragada - 15CSU243</h3>
</body>
</html> 