<?php 
include "koneksi.php";


if(@$_POST){
    $idanggota = $_POST['idanggota'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $foto = null;
    if(@$_FILES['foto']['tmp_name']){
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $dir = "public";
        move_uploaded_file($tmp, $dir."/".$foto);
    }
    
    $query = "INSERT INTO anggota (idanggota, nama, jeniskelamin, alamat, foto) VALUES ('$idanggota', '$nama', '$jeniskelamin', '$alamat', '$foto')";
    $result = mysqli_query($koneksi, $query);
    
    if($result){
        header("Location: index.php");
    }
}
?>