<?php
$a = array('Ahmad',19,true,3.19 );
//Menampilkan array satu-satu

echo"Array Menggunakan echo <br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";
echo"<br>";

echo"Array Mengunakan Looping For <br>";
for ($i=0; $i < count($a); $i++) { 
    echo"Array - " . $a[$i] . "<br>";
}
echo"<br>";
echo"Array Mengunakan Looping Forech <br>";
 foreach ($a as $data ) {
    echo"Array - " . $data . "<br>";
 }
?>