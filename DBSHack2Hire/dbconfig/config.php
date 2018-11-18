<?php
$username = "root";
$db_name= "bank";
$localhost="localhost";
$password="";
$conn=mysqli_connect($localhost, $username, $password, $db_name);
mysqli_select_db($conn,"bank");

if(!$conn)
{
	echo "database not selected";
}

?>