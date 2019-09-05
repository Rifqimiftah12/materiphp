<?php
$loop = 10;
$num =1;

for ($i=0; $i <= $loop ; $i++) { 
   if ($i==1) {
    echo"Aku Data Ke -".$num++. "Dan Mendapatkan Medali Emas<br>";
   } elseif ($i==2) {
    echo"Aku Data Ke -".$num++. "Dan Mendapatkan Medali Perak<br>";
   }elseif ($i==3) {
    echo"Aku Data Ke -".$num++. "Dan Mendapatkan Medali Perunggu<br>";
   }elseif ($i>=4 && $i <=6) {
    echo"Aku Data Ke -".$num++. "Dan Mendapatkan Tas Leptop<br>";
   }elseif ($i>=7 && $i <=9) {
    echo"Aku Data Ke -".$num++. "Dan Mendapatkan Tas Karung<br>";
   }elseif ($i>=10) {
    echo"Aku Data Ke -".$num++. "Dan Tidak Mendapatkan Apapun<br>";
   }
}

?>