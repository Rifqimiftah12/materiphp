<?php
$array = array ('judul','penulis');
$aso = [
    [
    'Judul' => '<h1>Belajar PHP & MYSQL Untuk Pemula',
    'Penulis' => '<h4>Admin SMK',
    ],
    [
    'Judul' => '<h1>Belajar PHP Dari Nol Hingga Mahir',
    'Penulis' => '<h4>Admin SMK',
    ],
    [
     'Judul' => '<h1>Membuat Aplikasi Web Dengan PHP',
     'Penulis' => '<h4>Admin SMK',
         ]
    ];
foreach ($aso as $value) {
    echo $value ["Judul"]. "<br>";
    echo $value ["Penulis"]. "<br>";
    echo'<hr>';
    foreach ($aso as $key => $value) {
    echo $value ["Judul"]. "<br>";
    echo $value ["Penulis"]. "<br>";
    echo'<hr>';
    }
}
?>