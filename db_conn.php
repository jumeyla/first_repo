<?php

$host= "localhost";
$username= "jumila";
$password = "localhostadmin";
$db_name = "crud";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}