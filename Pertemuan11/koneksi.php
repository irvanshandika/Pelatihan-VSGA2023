<?php 
$database = 'db_barang';
$username = 'root';
$password = '';
$server = 'localhost';

$koneksi = mysqli_connect($server, $username, $password, $database);


if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

?>