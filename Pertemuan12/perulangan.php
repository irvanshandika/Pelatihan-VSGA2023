<?php
$data_barang = ['beras', 'ayam', 'daun pisang', 'garam', 'gula', 'lidi', 'gas 3 kg', 'cuka',
'telur'];
$data_barang2 = ['harddisk', 'flashdisk', 'keyboard'];

// $nomor = 1;
// for ($i=0; $i < count($data_barang2); $i++) { 
//     # code...
//     echo $nomor . ' . ' . $data_barang[$i] . '<br>';
//     $nomor++;
// }

foreach ($data_barang as $key => $value) {
    # code...
    $nomor = $key +  1;
    echo $nomor. '.' .$value . '<br>';
    $nomor++;
}