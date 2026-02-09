<?php
include 'koneksi.php';

if (isset($_POST['simpan_perubahan'])) {
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi_sekolah']);
    
    // Update data pada ID 1 sesuai query di index.php
    $query = "UPDATE tabel_profil SET deskripsi_tentang = '$deskripsi' WHERE id = 1";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: dashboard.php?status=berhasil");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>