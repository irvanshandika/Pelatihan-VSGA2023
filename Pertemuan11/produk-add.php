<?php
include_once 'koneksi.php';

$nama_produk = $_POST['nama_produk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

$query = "INSERT INTO tb_product(nama_produk, warna, jumlah) VALUES ('$nama_produk', '$warna', '$jumlah')";

$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

if($result) {
    echo 'Simpan data berhasil, <a href="produk-read.php">kembali</a>';
}
?>
