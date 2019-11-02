<?php


global $conn;
$server 	= 'localhost';
$username 	= 'root';
$password 	= '';
$database 	= 'bootcaamp';

$conn = mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($conn, $database) or die("Database belum ada, silahkan import database");
?>