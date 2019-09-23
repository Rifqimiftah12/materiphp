<html>
<head><title>Rifqi Miftahudin</title></head>
<body>
    <fieldset>
    <legend>Pembelian Buku</legend>
    <table>
        <FORM ACTION="harian2.php" METHOD="POST">
        <center><h3>Pembelian Buku</h3></center>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required><br><td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="40" rows="5" requid></textarea><br></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk" value="laki-laki" checked>Laki-laki
            <input type="radio" name="jk" value="Perempuan"> Perempuan<br></td>
        </tr>
        <tr>
            <td>Tanggal Pembelian<td>
            <td><input type="date" name="date" required></td>
        </tr>
        <tr>
            <td>Jumlah Pembelian Buku</td>
            <td><input type="number" min="1" name="jumlah" required><br></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Masukan"></td>
        </tr>
        </FORM>
    </table>
</fieldset>
</body>
</html>