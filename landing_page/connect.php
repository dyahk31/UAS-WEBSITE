<?php
	$namahost = "localhost";
	$username = "root";
	$password = "";	//password MySQLi anda
	$database = "paket"; //database anda
	$connect = mysqli_connect($namahost,$username,$password) or die("Failed");
	mysqli_select_db($connect, $database) or die("Database not exist");
?>