<?php
if (isset($_POST['Input'])) {
$nama =$_POST['nama'];//primary key
$kelas =$_POST['kelas'];
$nomer = 0;
$nomer2 =0;

var_dump($nama);

echo"<br> <br>";
foreach ($nama as $data => $x) {
    echo"Nama : " .$nama[$data] .
      " -Kelas : " .$kelas[$data]."<hr>";
   }
}
?> 