<?php
session_start();
if($_SESSION['akseslogin']){
    ?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>segitiga</title>
</head>
<body>
<fieldset>
<legend>Segitiga</legend>
	 <center><nav>
    <a href="home.php">Home</a>
    <a href="hal1.php">Halaman1</a>
    <a href="hal2.php">Halaman2</a>
    <a href="hal3.php">Halaman3</a>
    <a href="logout.php">Logout</a>
    </nav></center>

<h3>Hitung Luas Segitiga</h3>
 
<p>Masukkan ukuran alas dan tinggi segitiga</p>
<form action="" method="post">
	Alas :<input type="text" name="alas"><br>
	Tinggi :<input type="text" name="tinggi"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	
	$luas_segitiga = 1/2 * $alas * $tinggi; // Menghitung luas segitiga
	
	echo "<br>Alas : $alas <br> Tinggi : $tinggi <br>";
	echo "Luas Segitga : $luas_segitiga";
}
?>
</fieldset>
</body>
</html>
<?php
}else{
    echo"<script>alert('Silakan Login Telebih Dahulu');"
    ."window.location.href='login.php'</script>";
}
?>