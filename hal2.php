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
    <title>Lingkaran</title>
</head>
<fieldset>
<legend>Lingkaran</legend>
<body>
<center><nav>
    <a href="home.php">Home</a>
    <a href="hal1.php">Halaman1</a>
    <a href="hal2.php">Halaman2</a>
    <a href="hal3.php">Halaman3</a>
    <a href="logout.php">Logout</a>
    </nav></center>

  <h3>Hitung Keliling dan Luas Lingkaran</h3>
 
<p>Masukkan Jari-Jari Lingkaran</p>
<form action="" method="post">
	Jari-jari :<input type="text" name="jari2"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 3.14;
	$luas_lingkaran = $phi * $jari2 * $jari2;
	$keliling_lingkraran = $phi*($jari2 + $jari2);
	
	echo "Lingkaran dengan jari-jari $jari2 maka memiliki <br>";
	echo "Luas : $luas_lingkaran <br>";
	echo "Keliling : $keliling_lingkraran";
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