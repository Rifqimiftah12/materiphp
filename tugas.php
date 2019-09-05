<?php
$transport =[
['Nama '=> 'Ujang','Kelas '=> 'XI RPL 1','Alamat '=> ' Buah Batu'],
['Nama '=> 'Mahmud','Kelas '=> 'XI RPL 2','Alamat '=> ' Tci'],
['Nama '=> 'Ucok','Kelas '=> 'XI RPL 3','Alamat '=> ' TKI']];
echo"<pre>";
print_r ($transport);
echo "</pre>";

$mode = current($transport[2]);
echo $mode."<br>"; 
?>