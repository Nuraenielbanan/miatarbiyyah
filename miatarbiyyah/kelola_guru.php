<?php
include 'koneksi.php';

// Ambil semua data guru
$query = mysqli_query($koneksi, "SELECT * FROM tabel_guru ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Guru - MI ATTARBIYAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --hijau-tua: #1a4d33; --hijau-muda: #00a65a; --putih: #ffffff; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: #f4f7f5; padding: 30px; }
        .container { max-width: 900px; margin: auto; }
        .btn-kembali { text-decoration: none; color: var(--hijau-tua); font-weight: bold; display: inline-block; margin-bottom: 20px; }
        .card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-bottom: 20px; }
        h2 { margin-bottom: 20px; color: var(--hijau-tua); }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table th, table td { padding: 12px; text-align: left; border-bottom: 1px solid #eee; }
        table th { background: #f9f9f9; color: #555; }
        .img-guru { width: 50px; height: 50px; border-radius: 50%; object-fit: cover; }
        .btn-tambah { background: var(--hijau-muda); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: bold; margin-bottom: 20px; }
        .btn-hapus { color: #e74c3c; text-decoration: none; font-size: 14px; }
        input { width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container">
    <a href="admin_dasbord.php" class="btn-kembali"><i class="fas fa-arrow-left"></i> Kembali ke Dashboard</a>

    <div class="card">
        <h3><i class="fas fa-user-plus"></i> Tambah Guru Baru</h3>
        <form action="proses_guru.php" method="POST" enctype="multipart/form-data" style="margin-top: 15px;">
            <input type="text" name="nama" placeholder="Nama Lengkap Guru" required>
            <input type="text" name="jabatan" placeholder="Jabatan (Contoh: Guru Kelas 1)" required>
            <label style="font-size: 13px; color: #666;">Foto Guru:</label>
            <input type="file" name="foto" required>
            <button type="submit" name="tambah_guru" class="btn-tambah">Simpan Data Guru</button>
        </form>
    </div>

    <div class="card">
        <h2><i class="fas fa-users"></i> Daftar Guru & Staf</h2>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><img src="uploads/<?php echo $row['foto']; ?>" class="img-guru"></td>
                    <td><strong><?php echo $row['nama']; ?></strong></td>
                    <td><?php echo $row['jabatan']; ?></td>
                    <td>
                        <a href="proses_guru.php?hapus=<?php echo $row['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus guru ini?')"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>