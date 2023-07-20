<?php
$file = fopen('data_barang.txt', 'w');
$nama_barang = "Data Barang: "."\n"."=============="."\n";
fwrite($file, $nama_barang);
fclose($file);
header('Location : fileread.php');