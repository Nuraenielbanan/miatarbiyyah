<?php
include "koneksi.php";

if(isset($_POST['publikasikan'])){
    $judul = $_POST['judul_berita'];
    $tanggal = date("Y-m-d");
    $foto = $_FILES['foto_berita']['name'];
    $tmp = $_FILES['foto_berita']['tmp_name'];

    // Pastikan kamu punya folder bernama 'img'
    if(move_uploaded_file($tmp, "img/".$foto)){
        $sql = "INSERT INTO tabel_kegiatan (judul_berita, foto_berita, tanggal) VALUES ('$judul', '$foto', '$tanggal')";
        mysqli_query($koneksi, $sql);
        header("location: kegiatan.php");
    }
}
?>