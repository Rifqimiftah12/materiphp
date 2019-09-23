<html>
<head><tittle></tittle></head>
<body>
<fieldset>
<center><h3>Pembayaran Buku</h3></center>
<?php

if (isset($_POST['sbm'])) {

    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk     = $_POST['jk'];
    $date   = $_POST['date'];
    $judul  = $_POST['judul'];
    $kode   = $_POST['kode'];
    $peng   = $_POST['peng'];
    $jenis  = $_POST['jenis'];
    $harga  = $_POST['harga'];
?>
    <table>
        <tr>
            <td><b>Nama</b></td>
            <td><?php echo ": $nama"; ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td><?php echo ": $alamat"; ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td><?php echo ": $jk"; ?></td>
        </tr>
        <tr>
            <td><b>Tanggal Pembelian</b></td>
            <td><?php echo ": $date"; ?></td>
            <td>
        </tr>
    </table>
    <hr>
    <?php

    foreach ($judul as $data => $x) {
        echo "<td><b>Judul</b>      : " . $judul[$data] . "<br>";
        echo "<b>Kode</b>       : " . $kode[$data] . "<br>";
        echo "<b>Pengarang</b>  : " . $peng[$data] . "<br>";
        echo "<b>Jenis</b>      : " . $jenis[$data] . "<br>";
        echo "<b>Harga</b>      : Rp." . $harga[$data] . "<br>";
        echo "<hr>";
    }
        for ($i=0; $i <count($harga) ; $i++) { 
    $hsl = $harga[$i]+$hsl;
}
echo "<b>Total Pembayaran :</b>Rp. $hsl";
echo "<br>";
if ($jumlah >= 3) {
    $dsc = $hsl * 5/100;
    echo "<b>Diskon (5%) :</b>Rp. $dsc<br>";
    $ttl = $hsl - $dsc;
    echo "<b>Total Pembayaran :</b>Rp. $ttl";
} elseif($jumlah >= 5){
    $dsc1 = $hsl * 10/100;
    $ttl1 = $hsl - $dsc1;
    echo "<b><br>Diskon (5%) :</b>Rp. $dsc1<br>";
    echo "<b><Total Pembayaran :</b>Rp. $ttl1";
} else {
    $n = 0;
    echo "<b>Diskon (0%) :</b>Rp. $n<br>";
    echo "<b>Total Pembayaran :</b>Rp. $hsl";
} 
}
?>

</fieldset>
</body>
</html>

