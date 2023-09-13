<?php
	session_start();
	require "rb.php";
	R::setup( 'mysql:host=localhost;dbname=esmu', 'root', '' );

	$db = mysqli_connect('localhost', 'root', '', 'esmu');

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "esmu";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

?>