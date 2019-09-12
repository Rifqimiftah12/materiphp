<html>
<head><title>Rifqi Miftahudin</title></head>
<body>
    <fieldset>
    <legend>Formulir</legend>
    <FORM ACTION="" METHOD="GET">
    <center><h3>Formulir</h3></center>
<label for="">Masukan Jumlah</label> 
<input type="number" min="1" name="masuk"required><br><br>
<input type="submit" name="input" value="Simpan">
<hr>
  </FORM>
  <FORM ACTION="prosesformulir.php" METHOD="POST" NAME="input">  
<?php
if (isset($_GET['input'])) {
$masuk = $_GET['masuk'];

for ($i=0; $i <$masuk ; $i++) { 
    echo '<br>Masukan Bilangan : <input type="number"  name="mb[]"required>
    Masukan Pangkat Bilangan : <input type="number"  name="mpb[]"required><br><br>';
}
echo '<input type="submit" name="Input" value="simpan"> 
<input type="reset" name="reset" value="reset">';
}
?>
</FORM>  
    </fieldset>
</body>
</html>