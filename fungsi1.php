<?php
function cetak_ganjil ()
{
    for ($i=0; $i <100 ; $i++) { 
        if ($i%2 == 1) {
            echo "$i ";
        }
    }
}
//optional parameter
function perkenalan2($nama = "Aang"){
    echo"Nama Saya : $nama";
}
echo "<hr>";
$a = "Saka";
perkenalan2();
?>