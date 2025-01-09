<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <header>
    <?php 
    include 'layout/nav.html';
    include 'layout/header.html';?>
    </header>

    <h1>Ini adalah dashboard Admin</h1>
    <h2>Selamat datang <?= $_SESSION['username']?></h2>

    <footer>
        <?php include 'layout/footer.html';?>
    </footer>
</body>
</html>