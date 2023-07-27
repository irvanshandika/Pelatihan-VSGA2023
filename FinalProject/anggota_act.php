<?php
include "koneksi.php";

$idanggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$foto = (@$_POST['foto_lama']) ?: '';

if (@$_FILES['foto']['tmp_name']) {
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $dir = "public";
    move_uploaded_file($tmp, $dir . "/" . $foto);
}


// Insert  
if (@$_POST) {

    $query = "INSERT INTO anggota (idanggota, nama, jeniskelamin, alamat, foto) VALUES ('$idanggota', '$nama', '$jeniskelamin', '$alamat', '$foto')";
}

// Update
if (@$_POST['id']) {
    $query = "UPDATE anggota SET 
                idanggota = '$idanggota', 
                nama = '$nama', 
                jeniskelamin = '$jeniskelamin', 
                alamat = '$alamat', 
                foto = '$foto' 
                    WHERE id = '$_POST[id]'";
}
// Delete
if (@$_GET['id']) {
    $query = "DELETE FROM anggota WHERE id = '$_GET[id]'";
}
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: anggota-read.php");
}
