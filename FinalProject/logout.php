<?php

session_start();
$_SESSION['sesi'] = null;
echo "<script>alert('Anda Berhasil Logout!');</script>";
echo '<meta http-equiv="refresh" content="0; url=index.php">';
