<?php
include "koneksi.php";

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$isbn = $_POST['isbn'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];


// Insert  
if (@$_POST) {

    $query = "INSERT INTO buku (id_buku, judul_buku, isbn, pengarang, penerbit, tahun) VALUES ('$id_buku', '$judul_buku', '$isbn', '$pengarang', '$penerbit', '$tahun')";
}

// Update
if (@$_POST['id']) {
    $query = "UPDATE buku SET 
                id_buku = '$id_buku', 
                judul_buku = '$judul_buku', 
                isbn = '$isbn', 
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                tahun = '$tahun',
                    WHERE id_buku = '$_POST[id]'";
}
// Delete
if (@$_GET['id']) {
    $query = "DELETE FROM buku WHERE id_buku = '$_GET[id]'";
}
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: buku-read.php");
}
