<?php
/*
cetak gol >= 10 'medali emas' & = 20 'Mendapatkan bonus 100 jt'
cetak gol >= 7 'medali perak' & = 9 'Mendapatkan bonus 80 jt'
cetak gol >= 4 'Medali perunggu' & = 5 'mendapatkan bonus 50 jt'
cetak gol < 4 'medali emas ngambang' & 'tidak mendapatkan bonus'
*/

$gol = 30;
$a = 100;
$b = 20;

if($gol >= 10){
   switch ($b) {
       case $b:
       echo"Medali emas,dengan total cetak gol : " .$gol ."Mendapatkan Bonus $a jt";
           break;
       
       default:
           echo"Tidak ada Jawaban";
           break;
   }
}
?>