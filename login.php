<?php
include("service/database.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE 
    username = '$username' AND password = '$password'";


    $result = $db -> query($sql);


    if ($result->num_rows > 0) {
        echo "Data ada";
        $data = $result->fetch_assoc();
        echo "data username adalah: ". $data["username"] ."dan passwordnya: ". $data["password"] ;
    } else {
        echo "Data tidak ada";
    }

    // fungsi titik untuk pemisah antar variabel pada php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Login Page yakk</title>
</head>
<body>
    <header>
        <?php 
            include 'layout/header.html';
            include 'layout/nav.html';
        ?>
    </header>
    <main>
        <form action="login.php" method="POST">
            <input type="text" placeholder="Username" name = "username">
            <input type="text" placeholder="Password" name = "password">
            <button type="submit" name="login">Login</button>
        </form>
        <a href=""></a>
    </main>
    <footer>
        <?php
        include 'layout/footer.html';
        ?>
    </footer>
</body>
</html>