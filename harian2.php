<html>
<head><tittle></tittle>
</head>
<body>
    <fieldset>
        <legend><h2><b>Formulir Buku</b></h2></legend>
        <form action="harian3.php" method="POST" name="input">
            <?php
                if (isset($_POST['submit'])) {
                    $nama   = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $jk     = $_POST['jk'];
                    $date   = $_POST['date'];
                    $jml_form = $_POST['jumlah'];
                    for ($a=0; $a < $jml_form; $a++) { ?>
                        <table>
                            <tr>
                                <td><label for="judul">Judul Buku</label></td>      
                                <td><input type="text" name="judul[]" required></td>
                            </tr>
                            <tr>
                                <td><label for="kode">Kode Buku</label></td>
                                <td><input type="text" name="kode[]" required></td>
                            </tr>
                            <tr>
                                <td><label for="peng">Pengarang</label></td>      
                                <td><input type="text" name="peng[]" required></td>
                            </tr>
                                <td><label for="jenis">Jenis</label></td>
                                <td><select name="jenis[]">
                                <option value="Novel">Novel</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Horor">Horor</option>
                                <option value="Komik">Komik</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td><label for="harga">Harga Buku</label></td>      
                                <td><input type="text" name="harga[]" required></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="nama" value="<?php echo "$nama"; ?>"></td>
                                <td><input type="hidden" name="alamat" value="<?php echo "$alamat"; ?>"></td>
                                <td><input type="hidden" name="jk" value="<?php echo "$jk"; ?>"></td>
                                <td><input type="hidden" name="date" value="<?php echo "$date"; ?>"></td>
                            </tr>
                        </table>
                        <hr>
                    <?php } ?>
                    <input type="submit" name="sbm" value="Simpan">
                    <input type="submit" name="reset" value="Reset">
        </form>
        <?php } ?>
    </fieldset>
</body>
</html>