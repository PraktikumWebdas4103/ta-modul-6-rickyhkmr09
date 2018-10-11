<?php
	$host			= 'localhost';
	$username		= 'root';
	$password		= '';
	$database		= 'mahasiswa';

	$conn = mysqli_connect($host, $username, $password, $database);

	if (!$conn) {
		die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}
?>