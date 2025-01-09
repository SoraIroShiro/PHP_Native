<?php
session_start();
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}
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

    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
    

    <footer>
        <?php include 'layout/footer.html';?>
    </footer>
</body>
</html>