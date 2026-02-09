<!DOCTYPE html>
<html lang="id">
<head>
    <style>
    /* Animasi masuk halaman */
    body {
        animation: fadeInPage 0.8s ease-in-out;
    }

    @keyframes fadeInPage {
        from { 
            opacity: 0; 
            transform: translateY(20px); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0); 
        }
    }

    /* Transisi halus saat kursor menyentuh gambar */
    .foto-grid img {
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), filter 0.3s ease;
    }

    .foto-grid img:hover {
        transform: scale(1.03);
        filter: brightness(0.9);
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - MI ATTARBIYAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }
        body { background-color: #f4f7f5; color: #333; }

        /* Header (Konsisten dengan index.php) */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 8%;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .btn-back {
            text-decoration: none;
            color: #1a4d33;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Card Berita Utama */
        .berita-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Grid 2 Foto */
        .foto-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5px; /* Jarak minimalis antar foto */
            background: #ddd;
        }

        .foto-grid img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .foto-grid img:hover {
            filter: brightness(0.9);
        }

        /* Konten Teks */
        .konten {
            padding: 40px;
            text-align: center;
        }

        .tanggal {
            display: inline-block;
            background: #00a65a;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        h1 {
            color: #1a4d33;
            font-size: 32px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 1.2;
        }

        .deskripsi {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .foto-grid { grid-template-columns: 1fr; }
            .foto-grid img { height: 300px; }
            h1 { font-size: 24px; }
        }
    </style>
</head>
<body>

<header>
    <a href="index.php" class="btn-back">
        <i class="fas fa-arrow-left"></i> Kembali ke Beranda
    </a>
    <div style="font-weight: bold; color: #1a4d33;">DOKUMENTASI KEGIATAN</div>
</header>

<div class="container">
    <article class="berita-card">
        <div class="foto-grid">
            <img src="berita1.jpg" alt="Creative Arts Cultural Festival 1">
            <img src="berita2.jpg" alt="Creative Arts Cultural Festival 2">
        </div>

        <div class="konten">
            <div class="tanggal">
                <i class="far fa-calendar-alt"></i> 10 November 2024
            </div>
            
            <h1>Creative Arts Cultural Festival <br> di UPI Tasikmalaya</h1>
            
            <p class="deskripsi">
                Siswa-siswi MI Attarbiyah turut berpartisipasi dan memeriahkan ajang 
                <strong>Creative Arts Cultural Festival</strong> yang diselenggarakan di Kampus UPI Tasikmalaya. 
                Kegiatan ini menjadi wadah bagi santri untuk mengekspresikan kreativitas seni dan budaya 
                di tingkat perguruan tinggi, sekaligus menjalin silaturahmi antar lembaga pendidikan.
            </p>
        </div>
    </article>
</div>

<footer style="text-align: center; padding: 40px 0; color: #888; font-size: 14px;">
    © 2026 MI Attarbiyah Tasikmalaya
</footer>

</body>
</html>