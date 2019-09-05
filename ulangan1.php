<?php
$s =100;
$y = 50;
$z =($s == $y) || ($s>$y);

echo"($s == $y) xor ($s>$y) : ";
if ($z == true) {
    echo"Heloo PHP";
}
echo"<br>";

echo"<br>";

 echo"($s ==$y) xor ($s < $y) : ";
 if ($z == false) {
     echo"Maaf Kondisinya Tidak Sesuai";
 } 
?>