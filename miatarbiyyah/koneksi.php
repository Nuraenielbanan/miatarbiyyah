<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mi_attarbiyah."; // Pastikan ejaannya sama persis dengan di phpMyAdmin

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>