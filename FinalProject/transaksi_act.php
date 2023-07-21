<?php 
include "koneksi.php";

    $idanggota = $_POST['anggota'];
    $idbuku = $_POST['buku'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];

    
// Insert  
if(@$_POST){
    $status = 'pinjam';
    
    $query = "INSERT INTO transaksi (anggota, buku, tanggal_pinjam, tanggal_kembali, status) VALUES ('$idanggota', '$idbuku', '$tanggal_pinjam', '$tanggal_kembali', '$status')";
}

if(@$_POST['id']){
    $status = 'kembali';
    $query = "UPDATE transaksi SET 
                 idanggota = '$idanggota', 
                 buku = '$idbuku', 
                 tanggal_pinjam = '$tanggal_pinjam', 
                 tanggal_kembali = '$tanggal_kembali', 
                 status = '$status' 
                     WHERE id = '$_POST[id]'";
 
 
 }

$result = mysqli_query($koneksi, $query);

if($result){
    header("Location: transaksi_read.php");
}
