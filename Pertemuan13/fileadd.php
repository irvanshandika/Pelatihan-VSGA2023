<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Barang</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="fileadd.php" method="POST">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang"/>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</body>
</html>
<?php
if(@$_POST){
    $file = fopen('data_barang.txt', 'a');
    $nama_barang = $_POST['nama_barang'] . "\n";
    fwrite($file, $nama_barang);
    fclose($file);
    header("Location : file-read.php");
}