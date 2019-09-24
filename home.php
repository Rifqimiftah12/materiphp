<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
<fieldset>
<legend>Home</legend>
<center><h2>^-^Selamat Datang ^-^</h2></center>
    <center><nav>
    <a href="hal1.php">Halaman1</a>
    <a href="hal2.php">Halaman2</a>
    <a href="hal3.php">Halaman3</a>
    <a href="logout.php">Logout</a>
    </nav></center>
    <?php echo$SESSION['akseslogin'];?>
    </fieldset>
</body>
</html>