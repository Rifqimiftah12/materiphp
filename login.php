<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
</head>
<body>
<center><h2>^-^Selamat Datang ^-^</h2></center>
    <form action="" method="POST">
    Email <input type="email" name="email" required>
    <br> password <input type="password" name ="pass" required>
    <br><input type="submit" value="Login" name="akses">
    </form>
</body>
</html>
<?php
if (isset($_POST['akses'])) {
    $a = $_POST['email'];
    $b = $_POST['pass'];
    if ($a == "Rifqim40@gmail.com" && $pass = "123456") {
        $_SESSION['akseslogin']="Rifqi";
        header("location:home.php");
    }else {
        echo"Login Gagal";
    }
}elseif ($_SESSION['akseslogin']) {
    echo"<script>alert('Anda sudah login');"
    ."window.location.href='home.php'</script>";
}
?>