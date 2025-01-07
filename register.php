<?php
include("service/database.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('.$username.', '.$password.')";

    if($db->query($sql)){
        echo "berhasil ditambahkan";}
    else {
            echo "gagal ditambahkan";
        }
    echo $username .' '. $password ; 
    // fungsi titik untuk pemisah antar variabel pada php
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <header>
    <?php 
        include 'layout/header.html';
        include 'layout/nav.html';?>
    </header>

    <h1>Daftar Akun</h1>
    <form action="register.php" method="POST">
        <input type="text" placeholder="Username" name = "username">
        <input type="text" placeholder="Password" name = "password">
        <button type="submit" name="register">Register</button>
    </form>
    <a href="index.php"><button>Kembali ke beranda</button></a>
    <?php include 'layout/footer.html'?>
</body>
</html>