<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - MI ATTARBIYAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Efek Keluar Halaman */
body {
    opacity: 1;
    transition: opacity 0.5s ease-in-out;
}

body.fade-out {
    opacity: 0;
}
        /* ANIMASI DASAR */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        body { 
            background-color: #f0f4f2; 
            color: #333; 
            line-height: 1.8;
            overflow-x: hidden;
        }

        /* HEADER DENGAN GRADASI */
      .header-sejarah { 
    background: linear-gradient(135deg, #1a4d33 0%, #007944 100%); 
    padding: 60px 8%; 
    text-align: left; /* Judul Sejarah Singkat tetap di kiri */
    animation: fadeInDown 0.8s ease-out;
}

.header-sejarah h1 { 
    font-size: 38px; 
    font-weight: 800;
    color: #ffffff; /* Warna putih untuk judul */
    margin: 0;
}

/* Container untuk slogan */
.slogan-container {
    width: 100%;
    text-align: center; /* MEMBUAT TULISAN KE TENGAH */
    margin-top: 25px;
}

/* Style khusus untuk tulisan Menelusuri... */
.sub-title { 
    color: #ffffff !important; /* WARNA PUTIH BERSIH */
    font-size: 18px; 
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    display: inline-block;
    opacity: 1; /* Pastikan tidak pudar */
}
/* Container utama tetap rata kiri untuk teksnya */
.container { 
    padding: 50px 8%; 
    max-width: 1100px; 
    margin: auto; 
    background: white; 
    box-shadow: 0 10px 30px rgba(0,0,0,0.1); 
    border-radius: 15px; 
    margin-top: -40px; 
    position: relative;
    text-align: left; /* Memastikan semua teks di dalam kotak putih rata kiri */
    animation: fadeInUp 1s ease-out;
}

/* Judul Kondisi Geografis & Sejarah */
h2 { 
    color: #1a4d33; 
    margin-bottom: 25px; 
    font-size: 28px;
    position: relative;
    padding-bottom: 10px;
    text-align: left; /* Rata kiri */
}

/* Garis hijau di bawah judul h2 */
h2::after {
    content: '';
    position: absolute;
    left: 0; /* Garis mulai dari kiri */
    bottom: 0;
    width: 80px;
    height: 4px;
    background: #00a65a;
}

        /* GALLERY FOTO (GRID) */
        .gallery-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 40px;
            animation: zoomIn 1.2s ease-out;
        }

        .foto-wrapper { overflow: hidden; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border: 4px solid white; }

        .foto-bangunan { 
            width: 100%; 
            height: 300px; 
            object-fit: cover; 
            transition: transform 0.5s ease;
        }

        .foto-bangunan:hover { transform: scale(1.1); }

        /* TEKSTUAL */
        h2 { 
            color: #1a4d33; 
            margin-bottom: 25px; 
            font-size: 28px;
            position: relative;
            padding-bottom: 10px;
        }
        h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 80px;
            height: 4px;
            background: #00a65a;
        }

        p { margin-bottom: 20px; text-align: justify; font-size: 17px; color: #444; }

        /* TOMBOL KEMBALI */
        .btn-kembali { 
            display: inline-block; 
            padding: 12px 30px; 
            background: #00a65a; 
            color: white; 
            text-decoration: none; 
            border-radius: 50px; 
            margin-top: 30px; 
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,166,90,0.3);
        }
        .btn-kembali:hover { 
            background: #1a4d33; 
            transform: translateX(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
        }

        footer { text-align: center; padding: 40px; background: #1a4d33; color: white; margin-top: 60px; }
    </style>
</head>
<body>
<div class="header-sejarah">
    <h1>SEJARAH SINGKAT</h1>
    
    <div class="slogan-container">
        <p class="sub-title">MENELUSURI JEJAK LANGKAH PENDIDIKAN ISLAMI & DIGITAL</p>
    </div>
</div>

    <div class="container">
        <div class="gallery-container">
            <div class="foto-wrapper">
                <img src="potomi.jpg" alt="Gedung MI Attarbiyah 1" class="foto-bangunan">
            </div>
            <div class="foto-wrapper">
                <img src="potomi2.jpg" alt="Gedung MI Attarbiyah 2" class="foto-bangunan">
            </div>
        </div>

        <h2>Kondisi Geografis & Sejarah</h2>
        <p>
            MI Attarbiyah secara geografis terletak di <strong>Kelurahan Bungursari Kecamatan Bungursari</strong> dengan luas wilayah sebesar 18.2 KM2. 
            Batas Wilayah Utara Kecamatan Indihiang, Timur Kecamatan Cipedes, Selatan Kecamatan Mangkubumi dan sebelah Barat Kabupaten Tasikmalaya.
        </p>

        <p>
            Berdasarkan data geografis, wilayah ini memiliki potensi yang variatif dengan dominasi pesawahan mencapai 610.99 Ha. 
            Posisi madrasah yang strategis berbatasan langsung dengan Kelurahan Sukajaya dan Kelurahan Sukarindik, menjadikan MI Attarbiyah sebagai pusat pendidikan pilihan bagi masyarakat di tiga kelurahan tersebut.
        </p>

        <p>
            Seiring berjalannya waktu, wilayah sekitar MI Attarbiyah mulai bertransformasi dari lahan pesawahan dan pegunungan menjadi area pemukiman yang tertata. Dengan desain bangunan yang menarik dan lingkungan yang asri, MI Attarbiyah terus berkomitmen menjadi lembaga pendidikan yang adaptif terhadap era digital namun tetap teguh pada nilai-nilai keislaman.
        </p>

        <center>
            <a href="index.php" class="btn-kembali"><i class="fas fa-arrow-left"></i> Kembali ke Beranda</a>
        </center>
    </div>

    <footer>
        <p>&copy; 2026 MI Attarbiyah Tasikmalaya. Membangun Generasi Islami & Digital.</p>
    </footer>
<script>
   <a href="index.php" class="btn-kembali">
    <i class="fas fa-home" style="margin-right: 8px;"></i> Kembali ke Beranda
</a>
</script>
</body>
</html>