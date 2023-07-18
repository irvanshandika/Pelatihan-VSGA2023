<?php

echo 'Ini perulangan for <br>';
$data_barang1 = ['Gula', 'Garam', 'Tepung', 'Telur', 'Beras'];
$data_barang2 = ['Baju', 'Celana', 'Sepatu', 'Dasi', 'Almamater'];

$angka = 0;
for ($i=0; $i < count($data_barang2); $i++) { 
    # code...
    echo $angka . ' . ' . $data_barang1[$i] . '<br>';
    $angka++;
}
echo '<br>';
echo 'Ini perulangan foreach <br>';
$buah = ['Apel', 'Anggur', 'Durian', 'Semangka', 'Sawo', 'Belimbing'];

foreach ($buah as $key => $value) {
    # code...
    $nomor = $key +  1;
    echo $nomor. '.' . 'Nama buah ' . $value .  '<br>';
    $nomor++;
}

echo '<br>';
echo 'Ini perulangan while <br>';
$sayur = ['Tomat', 'Timun', 'Terong', 'Sawi', 'Brokoli', 'Labu'];

$index = 0;
while ($index < count($sayur)) {
    $namaSayur = $sayur[$index];
    echo $index . ' . ' . ' Nama Sayur ' . $namaSayur . '<br>';
    $index++;
}
