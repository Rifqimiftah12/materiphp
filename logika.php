<?php
/*
cetak gol 
total gol >= 10 'Medali Emas'
total cetak gol >= 8 'Medali Perak'
Total gol >= 4 'Medali Perunggu'
Total Cetak Gol < 'Medali emas ngambang'
*/

//if
$gol = 10;

if($gol >= 10){
    echo"Medali emas,dengan total cetak gol : " .$gol;
}
else if($gol >= 8){
    echo"Medali perak,dengan total cetak gol : " .$gol;
}
else if($gol >= 4){
    echo"Medali perunggu,dengan total cetak gol : " .$gol;
}
else if($gol < 4){
    echo"Medali emas ngambang,dengan total cetak gol : " .$gol;
}
?>