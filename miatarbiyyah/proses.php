<?php
include 'koneksi.php';

// --- 1. PROSES UPDATE RUNNING TEXT ---
if (isset($_POST['update_pengumuman'])) {
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi_pengumuman']);
    $query = mysqli_query($koneksi, "UPDATE tabel_pengumuman SET isi_pengumuman = '$isi' WHERE id = 1");
    if ($query) {
        echo "<script>alert('Running Text Berhasil Diperbarui!'); window.location='admin_dasbord.php';</script>";
    }
}

// --- 2. PROSES UPDATE VISI & MISI ---
if (isset($_POST['update_profil'])) {
    $visi = mysqli_real_escape_string($koneksi, $_POST['visi']);
    $misi = mysqli_real_escape_string($koneksi, $_POST['misi']);
    
    $query = mysqli_query($koneksi, "UPDATE tabel_profil SET visi = '$visi', misi = '$misi' WHERE id = 1");

    if ($query) {
        echo "<script>alert('Visi & Misi Berhasil Diperbarui!'); window.location='admin_dasbord.php';</script>";
    }
}

<?php
include 'koneksi.php';

// Proses Update Tentang Kami
if (isset($_POST['update_tentang'])) {
    $tentang = mysqli_real_escape_string($koneksi, $_POST['tentang']);
    
    // Update ke tabel_profil pada ID 1
    $query = "UPDATE tabel_profil SET tentang_kami = '$tentang' WHERE id = 1";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: admin_dasbord.php?status=sukses");
    } else {
        echo "Gagal memperbarui: " . mysqli_error($koneksi);
    }
}
?>

// --- 4. PROSES UPLOAD BERITA/GALERI ---
if (isset($_POST['upload_berita'])) { // Ganti name button di HTML jika perlu
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $nama_file = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $target_file = "uploads/" . basename($nama_file);

    // Buat folder 'uploads' jika belum ada
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    if (move_uploaded_file($tmp_file, $target_file)) {
        // Sesuaikan nama tabel berita kamu
        mysqli_query($koneksi, "INSERT INTO tabel_berita (judul, gambar) VALUES ('$judul', '$nama_file')");
        echo "<script>alert('Berita Berhasil Diposting!'); window.location='admin_dasbord.php';</script>";
    }
}
?>