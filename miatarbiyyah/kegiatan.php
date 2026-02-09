
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan - MI ATTARBIYAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Mengambil style dasar dari index.php agar serasi */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }
        body { background: #f4f7f5; animation: fadeInPage 0.8s ease-in-out; }
        @keyframes fadeInPage { from { opacity: 0; } to { opacity: 1; } }

        /* Reuse Navbar Styles */
        header {
            display: flex; justify-content: space-between; align-items: center;
            padding: 10px 8%; background: #fff; position: sticky; top: 0;
            z-index: 1000; box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .logo-area { display: flex; align-items: center; gap: 15px; }
        .logo-area img { height: 60px; }
        .brand-name h1 { font-size: 18px; color: #1a4d33; }
        nav ul { display: flex; list-style: none; gap: 20px; }
        nav ul li a { text-decoration: none; color: #444; font-size: 14px; font-weight: 500; }
        nav ul li a:hover { color: #00a65a; }

        /* Content Styles */
        .container { padding: 50px 8%; }
        .section-title {
            text-align: center; margin-bottom: 40px;
            color: #1a4d33; font-size: 32px; position: relative;
        }
        .section-title::after {
            content: ''; width: 50px; height: 4px; background: #00a65a;
            display: block; margin: 10px auto;
        }

        /* Galeri Kegiatan Grid */
        .kegiatan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .kegiatan-card {
            background: white; border-radius: 12px; overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .kegiatan-card:hover { transform: translateY(-10px); }

        .kegiatan-card img {
            width: 100%; height: 200px; object-fit: cover;
        }

        .kegiatan-info { padding: 20px; }
        .kegiatan-info h3 { color: #1a4d33; margin-bottom: 10px; }
        .kegiatan-info p { color: #666; font-size: 14px; line-height: 1.6; }
        .date { font-size: 12px; color: #00a65a; font-weight: bold; margin-bottom: 5px; display: block; }

        footer { background: #1a4d33; color: white; text-align: center; padding: 30px; margin-top: 50px; }
    </style>
</head>
<body>

    <header>
        <div class="logo-area">
            <img src="logo1.jpg" alt="Logo">
            <div class="brand-name">
                <h1>MI ATTARBIYAH</h1>
                <h2>Tasikmalaya</h2>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="berita.php"><i class="fas fa-newspaper"></i> Berita</a></li>
                <li><a href="kegiatan.php" style="color: #00a65a;"><i class="fas fa-calendar-alt"></i> Kegiatan</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2 class="section-title">Dokumentasi Kegiatan</h2>

        <div class="kegiatan-grid">
            <div class="kegiatan-card">
                <img src="kkg.jpg" alt="KEGIATAN KERJA GURU ">
                <div class="kegiatan-info">
                    <span class="date"><i class="far fa-calendar"></i> 20 Desember 2025</span>
                    <h3>KEGIATAN KERJA GURU  </h3>
                    <p> SEBUAH  WADAH UNTUK SALING BERBAGI PENGETAHUAN DAN PENGALAMAN DI ANTARA PARA PENDIDIK</p>
                </div>
            </div>

            <div class="kegiatan-card">
                <img src="tentangkami5.jpg" alt="Olahraga">
                <div class="kegiatan-info">
                    <span class="date"><i class="far fa-calendar"></i> 15 Januari 2026</span>
                    <h3>FIELD STUDY / OUTING CLASS  DI PORLES TASIKMALAYA</h3>
                    <p>UNTUK MEMBERIKAN KESEMPATAN KEPADA PESERTA DIDIKuntuk MEMERIKSA PERMASALAHANNYA DI LAPANGAN</p>
                </div>
            </div>

            <div class="kegiatan-card">
                <img src="kegiatan2.jpg" alt="Ekstrakurikuler">
                <div class="kegiatan-info">
                    <span class="date"><i class="far fa-calendar"></i> 10 Januari 2026</span>
                    <h3>LATIAHAN PRAMUKA TERPADU</h3>
                    <p>MEMBENTUK KEMANDIRIAN DAN KERJA SAMA TIM BAGI SELURUH SISWA MI ATARBIYYAH.</p>
                </div>
            </div>

            <div class="kegiatan-card">
                <img src="kegiatan3.jpg" alt="Belajar Digital">
                <div class="kegiatan-info">
                    <span class="date"><i class="far fa-calendar"></i> 23 Desember 2025</span>
                    <h3>KEGIATAN SHOLAT DUHA BERSAMA </h3>
                    <p>PROGRAM INI BERTUJUAN UNTUK MENINGKATKAN KEIMANAN DAN KETAKWAAN SISWA. SELAIN ITU, KEGIATAN INI JUGA MENJADI DARI BAGIAN PEMBINAAN  KARAKTER RELIGIUS DI MADRASAH.</p>
                </div>
            </div>
             <div class="kegiatan-card">
                 <img src="kegiatan4.jpg" alt="Belajar Digital">
                <div class="kegiatan-info">
                    <span class="date"><i class="far fa-calendar"></i> 05 November 2025</span>
                    <h3>KEGIATAN PEMERIKSAAN KESEHATAN</h3>
                    <p>UNTUK MENINGKATKAN KUALITAS HIDUP SISWA DAN KEMAMPUAN UNTUK  MENDETEKSI MASALAH SEJAK DINI.</p>
                </div>
            </div>
            <div class="kegiatan-card">
                 <img src="kegiatan5.jpg" alt="Belajar Digital">
                <div class="kegiatan-info">
                    <span class="date"><i class="far fa-calendar"></i>  2025</span>
                    <h3>FIELD STUDY / OUTING CLASS  DI BANK INDONESIA</h3>
                    <p>OOUTING CLASS YANG BERLANGSUNG DI BANK INDONESIA MEMBERIKAN KESEMPATAN BAGI SISWA UNTUK MENGUNGKAPKAN SEJARAH PANJANG UANG SEBAGAI ALAT TUKAR YANG DIGUNAKAN DI MASYARAKAT.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 MI Attarbiyah Tasikmalaya. Membangun Generasi Islami & Digital.</p>
    </footer>

</body>
</html>