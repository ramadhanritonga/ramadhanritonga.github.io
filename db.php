<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname  = 'pisang_pasir';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>