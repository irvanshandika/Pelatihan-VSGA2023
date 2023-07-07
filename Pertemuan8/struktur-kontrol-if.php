<?php 
    $halaman = 'home';
    switch ($halaman) {
        case 'home':
            echo 'Ini adalah halaman beranda';
            break;

        case 'barang-masuk':
            echo 'Ini adalah halaman input barang masuk';
            break;

        case 'rencana-penjualan':
            echo 'Ini adalah halaman rencana-penjualan';
            break;

        default:
        echo 'Ini adalah halaman beranda';
        break;
    }
?>