<?php


$username = $_POST['user'];
$password = $_POST['pass'];

mysql_connect("localhost", "root", "");
mysql_select_db("login");


//To prevent MYSQL Injection

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);



$result = mysql_query("select * from users where username = '$username' and password = '$password'") 
       or die("Failed to query database ".mysql_error());

$row = mysql_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password) {
	echo "Login Successful";
} else {
	echo "Failed";
}

?>
