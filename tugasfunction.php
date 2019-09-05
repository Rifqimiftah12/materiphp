<?php
function luas_Segitiga($alas,$tinggi){
echo"<h1>Segitiga</h1><br>";
echo"Alas : $alas <br> Tinggi : $tinggi <br>";
echo"Cara Menghitung Luas :". $alas*$tinggi/2 ."CM";
}
luas_Segitiga(8,2);
echo"<hr>";

function lingkaran ($jari = 8)
{
echo"<h1>Lingkaran</h1><br>";
echo"Jari-jari Lingkaran : $jari<br>";
$luas = 3.14 * ($jari * $jari);
$kel = 2* (3.14 * $jari);
echo"Luas Lingkaran : $luas <br>";
echo"Keliling Lingkaran : $kel <br>";
}
$a =10;
lingkaran($a);

?>