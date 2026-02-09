<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']); 

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama_lengkap'];
    $_SESSION['role'] = $data['role'];

    if ($data['role'] == "admin") {
        header("location: dashboard-admin.php");
    } else if ($data['role'] == "guru") {
        header("location: dashboard-guru.php");
    }
} else {
    header("location: login.php?pesan=gagal");
}
?>