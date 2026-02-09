<?php
include 'koneksi.php';

// PROSES TAMBAH GURU
if (isset($_POST['tambah_guru'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
    
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "uploads/" . $foto;

    if (move_uploaded_file($tmp, $path)) {
        $query = mysqli_query($koneksi, "INSERT INTO tabel_guru (nama, jabatan, foto) VALUES ('$nama', '$jabatan', '$foto')");
        if ($query) {
            echo "<script>alert('Guru berhasil ditambah!'); window.location='kelola_guru.php';</script>";
        }
    }
}

// PROSES HAPUS GURU
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    
    // Ambil nama file foto dulu untuk dihapus dari folder
    $data = mysqli_query($koneksi, "SELECT foto FROM tabel_guru WHERE id=$id");
    $row = mysqli_fetch_assoc($data);
    unlink("uploads/" . $row['foto']); // Hapus file dari folder uploads

    mysqli_query($koneksi, "DELETE FROM tabel_guru WHERE id=$id");
    header("Location: kelola_guru.php");
}
?>