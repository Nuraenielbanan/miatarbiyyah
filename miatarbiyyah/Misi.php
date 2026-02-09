<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - MI ATTARBIYAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* ANIMASI HALUS */
        @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        body { 
            background-color: #f0f4f2; 
            color: #333; 
            line-height: 1.8;
            animation: fadeInUp 0.8s ease-out;
        }

        /* HEADER HIJAU GRADASI */
        .header-visi { 
            background: linear-gradient(135deg, #1a4d33 0%, #007944 100%); 
            color: white; 
            padding: 60px 8%; 
            text-align: left; /* Judul di kiri */
            animation: fadeInDown 0.8s ease-out;
        }
        
        .header-visi h1 { font-size: 38px; font-weight: 800; text-transform: uppercase; margin: 0; }

        /* SLOGAN PUTIH RATA TENGAH */
        .slogan-container {
            width: 100%;
            text-align: center; /* Rata tengah */
            margin-top: 25px;
        }

        .sub-title { 
            color: #ffffff !important; /* Warna putih */
            font-size: 18px; 
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: inline-block;
        }

        /* CONTAINER KONTEN */
        .container { 
            padding: 50px 8%; 
            max-width: 1100px; 
            margin: auto; 
            background: white; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.1); 
            border-radius: 15px; 
            margin-top: -40px; 
            position: relative;
            text-align: left; /* Konten kembali ke kiri */
        }

        .foto-bangunan { 
            width: 100%; 
            height: 400px; 
            object-fit: cover; 
            border-radius: 12px; 
            margin-bottom: 40px; 
            border: 5px solid #fff; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.1); 
        }

        h2 { 
            color: #1a4d33; 
            margin-top: 30px;
            margin-bottom: 25px; 
            font-size: 32px;
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

        /* KOTAK VISI */
        .box-visi { 
            background: #f4fbf7; 
            padding: 35px; 
            border-left: 8px solid #00a65a; 
            font-style: italic; 
            font-size: 22px; 
            color: #1a4d33;
            text-align: center; 
            margin-bottom: 40px; 
            border-radius: 0 15px 15px 0;
            box-shadow: 2px 5px 15px rgba(0,0,0,0.05);
            line-height: 1.6;
        }

        /* DAFTAR MISI */
        .misi-list { list-style: none; margin-bottom: 40px; }
        .misi-list li { 
            margin-bottom: 20px; 
            position: relative; 
            padding-left: 45px; 
            font-size: 18px;
            color: #444;
        }

        .misi-list li::before { 
            content: "\f14a"; 
            font-family: "Font Awesome 5 Free"; 
            font-weight: 900; 
            position: absolute; 
            left: 0; 
            color: #00a65a; 
            font-size: 24px;
        }

        /* TOMBOL HOME */
        .btn-kembali { 
            display: inline-block; 
            padding: 12px 35px; 
            background: #1a4d33; 
            color: white; 
            text-decoration: none; 
            border-radius: 50px; 
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .btn-kembali:hover { 
            background: #00a65a; 
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        footer { text-align: center; padding: 40px; background: #1a4d33; color: white; margin-top: 60px; }
    </style>
</head>
<body>

    <div class="header-visi">
        <h1>Visi & Misi</h1>
        <div class="slogan-container">
            <p class="sub-title">MEWUJUDKAN GENERASI UNGGUL, ISLAMI & DIGITAL</p>
        </div>
    </div>

    <div class="container">
        <img src="visi-misi.jpg" alt="Visi Misi MI Attarbiyah" class="foto-bangunan">

        <h2>Visi</h2>
        <div class="box-visi">
           “Menjadi lembaga pendidikan dasar yang unggul dengan mengapresiasi potensi peserta didik dalam pembinaan keislaman dan keilmuan, serta mengadaftasi era digital ”

        </div>

        <h2>Misi</h2>
        <ul class="misi-list">
            <li>Menyelenggarakan pendidikan dasar yang akan melahirkan lulusan beriman dan bertaqwa serta memiliki kemampuan kompetitif dan keunggulan komparatif</li>
            <li>Mengupayakan tersedianya sarana prasarana dan fasilitas belajar mengajar yang dapat memberikan kesempatan kepada para peserta didik untuk dapat mengikuti kegiatan belajar seluas-luasnya, sehingga madrasah benar-benar berfungsi sebagai pusat pembelajaran.</li>
            <li>Melakukan inovasi kurikulum dengan aksentuasi pada pembinaan keislaman, sains dan teknologi serta apresiatif terhadap kecenderungan globalisasi dan digitalisasi dengan tetap berpijak pada kepribadian Indonesia;
.</li>
            <li>Meningkatkan kompetensi dan kualifikasi pendidikan pendidik dan tenaga kependidikan
.</li>
        </ul>

        <center>
            <a href="index.php" class="btn-kembali"><i class="fas fa-home"></i> Kembali ke Beranda</a>
        </center>
    </div>

    <footer>
        <p>&copy; 2026 MI Attarbiyah Tasikmalaya. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>