<?php
if (isset($_POST['Input'])) {
$bil =$_POST['mb'];//primary key
$pangkat =$_POST['mpb'];

for ($i=0; $i <count($bil) ; $i++) { 
for ($a=1; $a <=$pangkat[$i] ; $a++) { 
    echo $bil[$i];
    if ($a <$pangkat[$i]) {
        echo"X";
    }
  }
  $hasil = pow($bil[$i],$pangkat[$i]);
  echo" = " . $hasil ."->";
  if ($hasil % 2 ==1) {
      echo"Bilangan Ganjil<br>";
  }else{
      echo"Bilangan Genap<br>";
  }
}
}
?> 