<?php
session_start();
$_SESSION['sesi'] = null;

include_once 'koneksi.php';

if ($_POST['submit']) {
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
    $sesi = mysqli_fetch_array($query);

    if (@$sesi['id_admin']) {
        $_SESSION['id_admin'] = $sesi['id_admin'];
        $_SESSION['sesi'] = $sesi['nama_admin'];

        echo "<script>alert('Anda Berhasil Login!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=buku-read.php">';
    } else {
        echo "<script>alert('Anda Gagal Login!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
} else {
    include_once 'buku-read.php';
}
