<?php 
for ($i=0; $i < 10; $i++) { 
    # code...
    echo 'Ini adalah perulangan ke-'. $i .'<br>';
}

echo '<hr>';
$i = 0;
while ($i < 10) {
    echo 'Ini adalah perulangan ke-'. $i .'<br>';
    $i++;
}
echo '<hr>';
$i = 0;
do{
    echo 'Ini adalah perulangan ke-'. $i .'<br>';
    $i++;
}
while ($i < 10);
?>