<?php 
function denda($hari, $jenis){
    switch($jenis){
        case 'A':
            $denda = 20000;
            break;
        
        case 'B':
            $denda = 10000;
            break;

        default:
            $denda = 500;
            break;
    }
$hasil = $denda * $hari;
return $hasil;
}
echo "Denda anda adalah : " . denda (10, '');

function bayar($harga, $qty){
    $hasil = $harga * $qty;
    return $hasil;
}
function hitung($hari){
    $denda = 500;
    $hasil = $hari * $denda;
    echo $hasil;
}

function umur()

?>
