<?php
if (isset($_POST['input'])) {
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$asal = $_POST['asal'];
$or = $_POST['or'];
$a = $_POST['a'];
$tn = $_POST['tn'];
$email = $_POST['email'];
echo "Nama  : <b>$nama</b><br>";
echo "nis : <b>$nis</b><br>";
echo "alamat : <b>$alamat</b><br>";
echo "Jenis Kelamin :<b>$jk</b><br>";
echo "Agama : <b>$agama</b><br>";
echo "Asal Sekolah : <b>$asal</b><br>";
echo "Nama Orang Tua/Wali : <b>$or</b><br>";
echo "Mata Pelajaran Yang Di sukai : <br>";
if (isset($_POST['band01'])) {
echo "+ " . $_POST['band01'] . "<br>";
}
if (isset($_POST['band02'])) {
echo "+ " . $_POST['band02'] . "<br>";
}
if (isset($_POST['band03'])) {
echo "+ " . $_POST['band03'] . "<br>";
}
if (isset($_POST['band04'])) {
echo "+ " . $_POST['band04'] . "<br>";
  }
  if (isset($_POST['band05'])) {
echo "+ " . $_POST['band05'] . "<br>";
  }
echo "Email : <b>$email</b><br>";
if ($tn > 23) {
echo "<h2>Selamat Anda Di Terima Karena Nilai Anda $tn</h2>";
} else {
echo "<h2>Maaf Anda Tidak Di Terima Karena Nilai Anda $tn</h2>";
}
}
?>