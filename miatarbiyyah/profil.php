<?php
// 1. Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "db_admin");
$query = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil GTK - MI ATTARBIYAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { 
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); 
            min-height: 100vh; 
            padding-top: 20px; 
            font-family: 'Poppins', sans-serif; 
        }
        
        /* Navigasi */
        .navbar { background: rgba(26, 77, 51, 0.9) !important; backdrop-filter: blur(10px); }

        /* Card Styling */
        .member-card {
            background: #fff;
            border-radius: 20px;
            display: flex;
            margin-bottom: 25px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            overflow: hidden;
            height: 170px; /* Sedikit lebih tinggi */
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255,255,255,0.2);
            position: relative;
        }

        .member-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 30px rgba(0,0,0,0.15);
        }

        /* Foto Part */
        .photo-part {
            width: 45%;
            position: relative;
            overflow: hidden;
            background: #eee; /* Warna dasar jika gambar loading */
        }

        .photo-part img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .member-card:hover .photo-part img {
            transform: scale(1.1);
        }

        /* PERBAIKAN LABEL NAMA: Selalu di Depan & Terbaca */
        .name-label {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            /* Gradasi hitam transparan agar teks putih terlihat jelas */
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 100%); 
            color: #fff !important;
            font-size: 11px;
            font-weight: 600;
            padding: 15px 5px 8px 5px; /* Padding bawah disesuaikan */
            text-align: center;
            z-index: 5; /* Memastikan di atas gambar */
            line-height: 1.2;
        }

        /* Info Part */
        .info-part {
            width: 55%;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #fff;
        }

        .role-badge {
            background: #e8f5e9;
            border: 2px solid #28a745;
            color: #1a4d33;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            text-align: center;
        }

        .stats { font-size: 11px; color: #888; margin-bottom: 8px; }
        
        h3 { color: #1a4d33; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark mb-5 shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MI ATTARBIYAH</a>
    <a href="index.php" class="btn btn-sm btn-outline-light">Kembali ke Beranda</a>
  </div>
</nav>

<div class="container">
    <h3 class="text-center mb-5">GURU, STAFF & TENAGA KEPENDIDIKAN</h3>
    <div class="row">
        <?php while($row = mysqli_fetch_assoc($query)) : ?>
        <div class="col-lg-4 col-md-6">
            <div class="member-card">
                <div class="photo-part">
                    <?php 
    // Ubah dari "img/" menjadi "guru/"
    $foto_db = trim($row['foto']);
    $path_foto = "guru/" . $foto_db; // Pastikan foldernya memang bernama 'guru'

    // Jika file tidak ada atau kolom kosong, tampilkan foto default
    if (empty($foto_db) || !file_exists($path_foto)) {
        $gambar_final = "guru/admin.jpg"; // Pastikan file admin.jpg ada di folder guru
    } else {
        $gambar_final = $path_foto;
    }
?>
<img src="<?= $gambar_final; ?>" alt="Foto <?= $row['nama']; ?>">
                    
                    <div class="name-label"><?= $row['nama']; ?></div>
                </div>
                
                <div class="info-part">
                    <div class="stats">
                        🌐 0 &nbsp; 👁️ <?= number_format($row['views']); ?>
                    </div>
                    <div class="role-badge"><?= $row['role']; ?></div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
</html>