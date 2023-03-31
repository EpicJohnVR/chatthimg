<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="chat";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
?>
