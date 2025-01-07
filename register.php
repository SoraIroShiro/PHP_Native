<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<?php include 'layout/header.html'?>
    <h1>Daftar Akun</h1>
    <form action="">
        <input type="text" placeholder="Username" name = "username">
        <input type="text" placeholder="Password" name = "password">
        <button type="submit">Register</button>
    </form>
    <a href="index.php"><button>Kembali ke beranda</button></a>
    <?php include 'layout/footer.html'?>
</body>
</html>