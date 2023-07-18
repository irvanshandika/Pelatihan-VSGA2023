<?php

$mobil = [
    'brand1' => 'Toyota',
    'type1' => [
        'family' => 'Avanza, Innova, Calya, Yaris, Velos, Rush',
        'sport' => 'Toyota 86, Supra',
    ],
    'brand2' => 'Honda',
    'type2' => [
        'family' => 'CR-V, BR-V, HR-V, Mobilio',
        'sport' => 'Honda Civic Type R, Honda Civic Type S',
    ],
    'brand3' => 'Mitsubishi',
    'type3' => [
        'family' => 'Pajero, Triton, Lancer, Mirage, ASX',
        'sport' => 'Mitsubishi Lancer Evolution X, Mitsubishi Lancer Evolution',
    ]
];

// Mengakses nilai dari array multidimensional
$sportMitsubishi = $mobil['type3']['sport'];

// Menampilkan nilai
echo "Sport Mitsubishi: " . $sportMitsubishi;

?>
