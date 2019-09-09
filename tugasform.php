<html>
<head><title>Tugas Form</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Masukan Bilangan : <input type="number" name="bintang" require>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
echo"<h2>Bintang Datar</h2>";
if (isset($_POST['Input'])) {
$bintang = $_POST['bintang'];
for ($i=0; $i <$bintang ; $i++) { 
    echo "*";
}
echo"<br>";
echo"Total Bintang : $bintang <hr>";
}
?>

<?php
echo"<h2>Bintang Segitiga Siku-Siku</h2>";
if (isset($_POST['Input'])) {
$bintang = $_POST['bintang'];

for ($i=0; $i <=$bintang ; $i++) { 
    for ($a=0; $a <$i ; $a++) { 
        echo"*";
    }
    echo "<br>";
}
echo"<br>";
echo"Total Bintang : $bintang<hr>";
}
?>

<?php
echo"<h2>Bintang Piramida</h2>";
if (isset($_POST['Input'])) {
$bintang = $_POST['bintang'];
$size =5;

for ($i=1; $i <=$bintang ; $i++) { 
    for ($a=1; $a <=$bintang-$i ; $a++) {
           echo"&nbsp;&nbsp;";
        } 
         for ($k=1; $k <=$i ; $k++) { 
            echo"*&nbsp;&nbsp;";
    }
    echo "<br />";
}
echo"<br>";
echo"Total Bintang : $bintang<hr>";
}
?>

<?php
echo"<h2>Bintang Piramid Terbalik</h2>";
if (isset($_POST['Input'])) {
$bintang = $_POST['bintang'];

for ($i=1; $i <=$bintang ; $i++) { 
    for ($a=1; $a <=$i ; $a++) {
           echo"&nbsp";
        } 
         for ($k=$bintang; $k >=$i ; $k--) { 
            echo"*&nbsp";
    }
    echo "<br>";
}
echo"<br>";
echo"Total Bintang : $bintang<hr>";
}
?>

<?php
echo"<h2>Bintang Belah Ketupat</h2>";
if (isset($_POST['Input'])) {
$bintang = $_POST['bintang'];
$size =5;

for ($i=1; $i <=$bintang ; $i++) { 
    for ($a=1; $a <=$bintang-$i ; $a++) {
           echo"&nbsp;&nbsp;";
        } 
         for ($k=1; $k <=$i ; $k++) { 
            echo"*&nbsp;&nbsp;";
    }
    echo "<br />";
}
for ($i=1; $i <=$bintang ; $i++) { 
    for ($a=1; $a <=$i ; $a++) {
           echo"&nbsp";
        } 
         for ($k=$bintang; $k >=$i ; $k--) { 
            echo"*&nbsp";
    }
    echo "<br>";
}
echo"<br>";
echo"Total Bintang : $bintang<hr>";
}
?>