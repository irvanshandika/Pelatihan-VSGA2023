<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>
<body>
    <a href="fileadd.php">Add Data</a>
    <a href="filecreate.php">Buat Baru</a>
    <br><br>
</body>
</html>

<?php
$file = fopen('data_barang.txt', 'r');
while (!feof($file)) {
    # code...
    echo fgets($file) . '<br><br>';
}
fclose($file);