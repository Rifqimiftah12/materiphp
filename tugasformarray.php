<html>
<head><title>Form Array</title></head>
<body>
    <fieldset>
    <legend>Form Array</legend>
    <FORM ACTION="" METHOD="GET">
    <center><h3>Form Array</h3></center>
<label for="">Masukan Jumlah</label> 
<input type="number" min="1" name="masuk"required><br><br>
<input type="submit" name="input" value="Simpan">
<hr>
  </FORM>
  <FORM ACTION="prosesarray.php" METHOD="POST" NAME="input">  
<?php
if (isset($_GET['input'])) {
$masuk = $_GET['masuk'];

for ($i=0; $i <$masuk ; $i++) { 
    echo '<br>Nama <input type="text"  name="nama[]"required>
    Kelas <input type="text"  name="kelas[]"required><br><br>';
}
echo '<input type="submit" name="Input" value="simpan"> 
<input type="reset" name="reset" value="reset">';
}
?>
</FORM>  
    </fieldset>
</body>
</html>
