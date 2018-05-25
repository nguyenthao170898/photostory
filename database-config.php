<?php 	
$servername = "localhost";
	$username = "id2855289_nguyenthao_photostory";
	$password = "123456";
	$database ="id2855289_photostory";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$conn->query("SET NAMES 'utf8'");

 ?>