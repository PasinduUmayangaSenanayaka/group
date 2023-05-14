<?php

$servername = "localhost";
$username   = "root";
$password   = "Pasindu@2002";
$dbname     = "world";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	
die("Connection failed: " . mysqli_connect_error());

}

?>