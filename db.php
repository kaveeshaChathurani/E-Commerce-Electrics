<?php
	$dbhost = 'localhost'; //127.0.0.1
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'hometeq';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//if the DB connection fails, display an error message and exit
	if (!$conn)
	{
	die('Could not connect: ' . mysqli_error($conn));
	}
	//select the database
	mysqli_select_db($conn, $dbname);
?>

