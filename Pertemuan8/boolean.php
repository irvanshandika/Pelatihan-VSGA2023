<?php 
$boolt = true;
$boolf = false;
$_boolt = " ";
$_boolf = "";
$set_menu = false;

$top_menu = true;
$nav_menu = true;
$side_menu = true;

if($top_menu == $set_menu) {
    echo 'top_menu tampil';
    echo '<br>';
}else{
    echo 'style="display: none"';
}if($nav_menu == $set_menu) {
    echo 'nav_menu tampil';
    echo '<br>';
}if($side_menu == $set_menu) {
    echo 'side_menu tampil';
    echo '<br>';
}
?>