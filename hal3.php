<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Persegi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	
<fieldset>
<legend>Persegi</legend>
<center><nav>
<a href="home.php">Home</a>
    <a href="hal1.php">Halaman1</a>
    <a href="hal2.php">Halaman2</a>
    <a href="hal3.php">Halaman3</a>
    <a href="logout.php">Logout</a>
    </nav></center>

<h3>Hitung Keliling dan Luas Persegi</h3>
 
<form action="" method="post">
	Sisi :<input type="text" name="sisi"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
if(isset($_POST['submit'])){
	$sisi = $_POST['sisi'];
 
	$keliling_persegi = $sisi * 4;
	$luas_persegi = $sisi * $sisi;
 
	echo "Persegi memiliki sisi $sisi maka : <br>";
	echo "Luas : $luas_persegi <br>";
	echo "Keliling : $keliling_persegi";
}
?>
</fieldset>
</body>
</html>