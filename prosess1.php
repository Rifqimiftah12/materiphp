<?php
if (isset($_POST['input'])) {
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$potongan = $_POST['potongan'];
$golongan = $_POST['golongan'];


echo"<center><h1>PENGGAJIHAN KARYAWAN</h1></center>";
echo"<br>"."<right>". date("<b>d/m/Y</b>")."</right>";
echo"<br>";
echo "Nama  : <b>$nama</b><br>";
echo "nip : <b>$nip</b><br>";
echo "Jenis Kelamin :<b>$jk</b><br>";
echo "alamat : <b>$alamat</b><br>";
echo "Status : <b>$status</b><br>";
if ($status==Menikah) {
    $status=100000;
    echo"<b>Selamat Anda Mendapatkan Tunjangan Rp. $status</b>";
}else {
    $status=50000;
  echo"<b>Selamat Anda Mendapatkan Tunjangan Rp.$status</b>";
}
echo"<br>";
echo "Jabatan : <b>$jabatan</b><br>";
if ($jabatan == Hrd) {
    $jabatan=5000000;
    echo"<b>Gaji  Rp. $jabatan</b>";
}elseif ($jabatan == Maneger) {
    $jabatan=4500000;
    echo"<b>Gaji Rp. $jabatan</b>";
}elseif ($jabatan == Staff) {
    $jabatan=3000000;
    echo"<b>Gaji  Rp. $jabatan</b>";
}elseif ($jabatan == Karyawan) {
    $jabatan=2500000;
    echo"<b>Gaji Rp. $jabatan</b>";
}
echo"<br>";
echo "Potongan :";
if (isset($_POST['band01'])) {
echo "+ " . $_POST['band01'] . "<br>";
$potongan1=250000;
}if (isset($_POST['band02'])) {
echo "+ " . $_POST['band02'] . "<br>";
$potongan2=150000;
}if (isset($_POST['band03'])) {
echo "+ " . $_POST['band03'] . "<br>";
$potongan3=150000;
$potongan=$potongan1+$potongan2+$potongan3;
}
echo"<br>";
echo "Golongan : <b>$golongan</b><br>";
if ($golongan == A1) {
    $gol=250000;
    $gakor = $gol+$status+$jabatan-$potongan;
    $pajak = $gakor * 2.5/100;
    $gaber = $gakor -$pajak;
    echo"<b>$golongan Rp. $gol</b><br> Gaji Kotor : $gakor<br> Gaji Bersih : $gaber";
}elseif ($golongan == A2) {
     $gol=200000;
     $gakor = $gol+$status+$jabatan-$potongan;
       $pajak = $gakor * 2.5/100;
    $gaber = $gakor -$pajak;
    echo"<b>$golongan Rp. $gol</b><br>Gaji Kotor : $gakor<br> Gaji Bersih : $gaber";
}elseif ($golongan == A3) {
     $gol=150000;
     $gakor = $gol+$status+$jabatan-$potongan;
       $pajak = $gakor * 2.5/100;
    $gaber = $gakor -$pajak;
    echo"<b>$golongan Rp. $gol</b><br>Gaji Kotor : $gakor<br> Gaji Bersih : $gaber";
}
}
?>