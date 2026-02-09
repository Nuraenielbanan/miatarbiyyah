<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Posting Kegiatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5><i class="fas fa-edit"></i> Posting Kegiatan Terbaru</h5>
            </div>
            <div class="card-body">
                <form action="proses_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Judul Berita:</label>
                        <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan judul berita..." required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Berita:</label>
                        <input type="file" name="foto_berita" class="form-control" required>
                    </div>
                    <button type="submit" name="publikasikan" class="btn btn-primary w-100">
                        Publikasikan Kegiatan
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>