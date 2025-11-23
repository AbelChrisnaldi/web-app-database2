<?php
$host = "tugas2-server.mysql.database.azure.com";
$username = "user";
$password = "admin123@";
$database = "logistik_lokal";

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password, $database, 3306, NULL, MYSQLI_CLIENT_SSL);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8mb4");
?>