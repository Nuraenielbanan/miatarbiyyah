<?php
include 'koneksi.php';

// Ambil data Running Text
$query_p = mysqli_query($koneksi, "SELECT * FROM tabel_pengumuman WHERE id = 1");
$data_p  = mysqli_fetch_assoc($query_p);
$isi_pengumuman = isset($data_p['isi_pengumuman']) ? $data_p['isi_pengumuman'] : '';

// Ambil data Visi & Misi
$query_v = mysqli_query($koneksi, "SELECT * FROM tabel_profil WHERE id = 1");
$data_v  = mysqli_fetch_assoc($query_v);
$visi = isset($data_v['visi']) ? $data_v['visi'] : '';
$misi = isset($data_v['misi']) ? $data_v['misi'] : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - MI ATTARBIYAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a4d33;
            --accent: #00a65a;
            --bg: #f0f2f5;
            --white: #ffffff;
            --text: #2d3436;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        body { 
            background: var(--bg); 
            display: flex; 
            min-height: 100vh;
            color: var(--text);
        }

        /* Sidebar Elegan */
        .sidebar { 
            width: 280px; 
            background: var(--primary); 
            color: white; 
            padding: 30px 20px; 
            position: fixed; 
            height: 100%;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar h2 { 
            font-size: 20px; 
            margin-bottom: 40px; 
            text-align: center; 
            letter-spacing: 1px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 20px;
        }

        .sidebar ul { list-style: none; }
        .sidebar ul li a { 
            color: rgba(255,255,255,0.8); 
            text-decoration: none; 
            display: flex; 
            align-items: center; 
            gap: 15px; 
            padding: 15px; 
            border-radius: 12px; 
            transition: all 0.3s ease;
            margin-bottom: 10px;
        }

        .sidebar ul li a:hover, .sidebar ul li a.active { 
            background: rgba(255,255,255,0.15); 
            color: white;
            transform: translateX(5px);
        }

        /* Main Content */
        .main-content { 
            margin-left: 280px; 
            width: calc(100% - 280px); 
            padding: 40px; 
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .welcome-text h1 { font-size: 28px; color: var(--primary); }
        .welcome-text p { color: #636e72; margin-top: 5px; }

        /* Status Alert */
        .alert-sukses {
            background: #d1f2eb;
            color: #0b5345;
            padding: 15px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-left: 5px solid var(--accent);
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Form Card Elegan */
        .grid-focus {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .glass-card {
            background: var(--white);
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.03);
            border: 1px solid rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .glass-card:hover { box-shadow: 0 15px 35px rgba(0,0,0,0.07); }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f2f5;
        }

        .card-header i { 
            font-size: 24px; 
            color: var(--accent);
            background: #e8f5e9;
            padding: 12px;
            border-radius: 12px;
        }

        .card-header h3 { font-size: 20px; color: var(--primary); }

        label { 
            display: block; 
            margin-bottom: 10px; 
            font-weight: 600; 
            color: #4b4b4b;
            font-size: 14px;
        }

        textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #f1f3f5;
            border-radius: 12px;
            background: #f8f9fa;
            font-size: 15px;
            transition: 0.3s;
            resize: vertical;
            margin-bottom: 20px;
        }

        textarea:focus {
            border-color: var(--accent);
            background: white;
            outline: none;
            box-shadow: 0 0 0 4px rgba(0,166,90,0.05);
        }

        .btn-modern {
            background: var(--accent);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: 0.3s;
            width: auto;
        }

        .btn-modern:hover {
            background: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(26, 77, 51, 0.3);
        }

        .two-cols {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        @media (max-width: 992px) {
            .two-cols { grid-template-columns: 1fr; }
            .sidebar { width: 80px; padding: 20px 10px; }
            .sidebar h2, .sidebar span { display: none; }
            .main-content { margin-left: 80px; width: calc(100% - 80px); }
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <h2><i class="fas fa-shield-cat"></i> <span>ADMIN PANEL</span></h2>
        <ul>
            <li><a href="admin_dasbord.php" class="active"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>
            <li><a href="index.php"><i class="fas fa-globe"></i> <span>Lihat Website</span></a></li>
            <li style="margin-top: 100px;">
                <a href="logout.php" style="color: #ff7675;"><i class="fas fa-power-off"></i> <span>Keluar</span></a>
            </li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="header-section">
            <div class="welcome-text">
                <h1>Halo, Admin MI Attarbiyah 👋</h1>
                <p>Kelola konten utama website Anda di sini.</p>
            </div>
        </div>

        <?php if(isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
            <div class="alert-sukses">
                <i class="fas fa-check-circle"></i>
                <strong>Berhasil!</strong> Perubahan data telah diperbarui di website.
            </div>
        <?php endif; ?>

        <div class="grid-focus">
            
            <section class="glass-card">
                <div class="card-header">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Pengaturan Running Text (Pengumuman)</h3>
                </div>
                <form action="proses.php" method="POST">
                    <label>Isi Pesan Berjalan:</label>
                    <textarea name="isi_pengumuman" rows="3" placeholder="Contoh: Penerimaan Peserta Didik Baru (PPDB) Tahun 2024 Telah Dibuka!"><?php echo $isi_pengumuman; ?></textarea>
                    <button type="submit" name="update_pengumuman" class="btn-modern">
                        <i class="fas fa-paper-plane"></i> Perbarui Pengumuman
                    </button>
                </form>
            </section>

            <section class="glass-card">
                <div class="card-header">
                    <i class="fas fa-eye"></i>
                    <h3>Visi & Misi Sekolah</h3>
                </div>
                <form action="proses.php" method="POST">
                    <div class="two-cols">
                        <div>
                            <label><i class="fas fa-star" style="color: #f1c40f; font-size: 12px;"></i> Visi Sekolah:</label>
                            <textarea name="visi" rows="6"><?php echo $visi; ?></textarea>
                        </div>
                        <div>
                            <label><i class="fas fa-list-ul" style="color: #3498db; font-size: 12px;"></i> Misi Sekolah:</label>
                            <textarea name="misi" rows="6" placeholder="Gunakan enter untuk setiap poin misi..."><?php echo $misi; ?></textarea>
                        </div>
                    </div>
                    <button type="submit" name="update_profil" class="btn-modern">
                        <i class="fas fa-save"></i> Simpan Perubahan Visi & Misi
                    </button>
                </form>
            </section>

        </div>
    </main>

</body>
</html>