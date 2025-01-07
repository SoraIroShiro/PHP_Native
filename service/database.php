<?php
require_once __DIR__ . '/vendor/autoload.php'; // Pastikan library dotenv di-load

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password =  $_ENV['DB_PASSWORD'];
$database_name = $_ENV['DB_NAME'];

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db -> connect_error) {
    echo"Gagal terhubung ke database";
    die("error");
}


?>