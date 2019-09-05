<?php

$array = array ('saya <br>',10);
$key =['Barang :','Harga :','Berat :'];
$aso = [
    [
    'Barang' => 'Buku Tulis',
    'Harga' => '4000',
    'Berat' => '100 gram',
    ]
    ];
    
foreach ($aso as  $key => $value) {
    echo $key[0]. $value ["Barang"]. "<br>";
    echo $key[1].$value ["Harga"]. "<br>";
    echo $key[2].$value ["Berat"]. "<br>";
}
?>