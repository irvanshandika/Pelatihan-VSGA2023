<?php 
$database = 'simperpus_vsga2023';
$username = 'irvan';
$password = 'irvanshandika';
$server = 'localhost';

$koneksi = mysqli_connect($server, $username, $password, $database);


if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

?>