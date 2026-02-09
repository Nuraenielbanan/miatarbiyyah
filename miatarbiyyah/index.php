<?php
include 'koneksi.php';
// Ambil data Visi & Misi terbaru
$query_v = mysqli_query($koneksi, "SELECT * FROM tabel_profil WHERE id = 1");
$data_v  = mysqli_fetch_assoc($query_v);

// Ambil data Pengumuman (Running Text) terbaru
$query_p = mysqli_query($koneksi, "SELECT * FROM tabel_pengumuman WHERE id = 1");
$data_p  = mysqli_fetch_assoc($query_p);
?>
<!DOCTYPE html>
<html lang="id">
<head>
...

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil MI ATTARBIYAH TASIKMALAYA</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .contact-info i.fa-clock {
    background-color: #ffcc00; /* Warna kuning sesuai gambar */
    color: #333;
    padding: 5px 8px;
    border-radius: 2px;
    margin-right: 5px;
}

/* Memastikan teks jam terlihat jelas */
#jam-berjalan {
    font-weight: bold;
    margin-right: 15px;
}
        /* Styling untuk List Menu Dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Styling isi Dropdown (Kotak Biru) */
.dropdown-content {
    display: none; /* Sembunyikan dulu */
    position: absolute;
    background-color: #0088cc; /* Sesuaikan dengan warna biru di foto Anda */
    min-width: 160px;
    box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 4px;
    margin-top: 5px;
}

/* Styling Link di dalam Dropdown */
.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-size: 14px;
    transition: 0.3s;
}

/* Efek saat link di dalam kotak biru disorot */
.dropdown-content a:hover {
    background-color: #005f99;
    border-radius: 4px;
}

/* PERINTAH: Munculkan dropdown saat menu utama di-hover */
.dropdown:hover .dropdown-content {
    display: block;
    animation: fadeIn 0.3s;
}

/* Animasi halus saat muncul */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
        /* Cari tag style yang sudah ada, lalu tambahkan ini di bawahnya */
body {
    animation: fadeInPage 0.8s ease-in-out;
}

@keyframes fadeInPage {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
        /* CSS DASAR */
        html { scroll-behavior: smooth; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }

        /* TOP BAR */
        .top-bar { background-color: #007944; color: white; padding: 10px 8%; font-size: 13px; display: flex; justify-content: flex-end; }
        .contact-info span { margin-left: 20px; }
/* Container Dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Isi Dropdown (Sembunyi secara default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 250px;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.15);
    z-index: 1001;
    border-radius: 4px;
    margin-top: 5px;
    border-top: 3px solid #00a65a;
}

/* Gaya Link di dalam Dropdown */
.dropdown-content a {
    color: #444;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 14px;
    border-bottom: 1px solid #f1f1f1;
    transition: 0.2s;
}

.dropdown-content a:hover {
    background-color: #f9f9f9;
    color: #00a65a !important;
}

/* Munculkan saat kursor di atas menu Profil */
.dropdown:hover .dropdown-content {
    display: block;
}
        /* NAVBAR STICKY */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 8%;
            background: #fff;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .logo-area { display: flex; align-items: center; gap: 15px; }
        .logo-area img { height: 60px; }
        .brand-name h1 { font-size: 18px; color: #1a4d33; line-height: 1.1; }
        .brand-name h2 { font-size: 22px; color: #1a4d33; font-weight: bold; text-transform: uppercase; }

        nav ul { display: flex; list-style: none; align-items: center; gap: 20px; }
        nav ul li a { text-decoration: none; color: #444; font-size: 14px; font-weight: 500; transition: 0.3s; display: flex; align-items: center; gap: 6px; }
        nav ul li a:hover { color: #00a65a; }

        /* --- CSS DROPDOWN BARU --- */
        .dropdown {
            position: relative;
            display: inline-block;
        }

       /* --- PERBAIKAN CSS DROPDOWN --- */

/* 1. Pastikan container relatif */
.dropdown {
    position: relative;
    display: inline-block;
}

/* 2. Atur isi dropdown agar selalu di depan (z-index tinggi) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 250px;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 9999; /* Angka tinggi agar tidak tertutup gambar/hero */
    border-radius: 4px;
    margin-top: 0; 
    border-top: 3px solid #00a65a;
    left: 0; /* Pastikan rata kiri dengan menu induk */
}

/* 3. Gaya link di dalam agar bisa diklik dengan jelas */
.dropdown-content a {
    color: #444 !important; /* Warna dipaksa agar tidak transparan */
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 14px;
    border-bottom: 1px solid #f1f1f1;
    transition: 0.2s;
    text-align: left;
}

/* 4. Efek hover pada item menu */
.dropdown-content a:hover {
    background-color: #f9f9f9;
    color: #00a65a !important;
    padding-left: 20px;
}

/* 5. Tampilkan dropdown saat kursor di atas menu Profil */
.dropdown:hover .dropdown-content {
    display: block;
}

/* 6. Tambahan: Area "jembatan" agar menu tidak hilang saat kursor bergerak pelan ke bawah */
.dropdown::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 10px;
    bottom: -10px;
    left: 0;
}

        .dropdown:hover .dropdown-content {
            display: block;
        }
        /* ------------------------ */

        .btn-login {
            background: #1a4d33;
            border: none;
            color: white;
            padding: 8px 18px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
        }
        .btn-login:hover { background: #00a65a; }

        /* HERO SECTION */
        .hero {
            height: 550px;
            background: url('siswa.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: center;
        }

        .hero-content { z-index: 3; margin-top: 200px; }
        .hero-content h3 {
            font-size: 48px; font-weight: bold; text-transform: uppercase; color: black;
            filter: blur(1px);
            text-shadow: 0 0 10px rgba(255, 255, 0, 0.8), 0 0 20px rgba(255, 215, 0, 0.5), 2px 2px 10px rgba(0, 0, 0, 0.9);
            letter-spacing: 2px;
        }

        /* RUNNING TEXT */
        .running-text-container { background-color: #1178a2; color: white; padding: 12px 0; overflow: hidden; display: flex; align-items: center; width: 100%; }
        .announcement-label { background-color: #1178a2; color: #fffb00; font-weight: bold; padding: 0 25px; z-index: 5; white-space: nowrap; position: relative; }
        .moving-text { display: inline-block; white-space: nowrap; font-weight: 500; animation: jalan-terus 25s linear infinite; }
        @keyframes jalan-terus { 0% { transform: translateX(100%); } 100% { transform: translateX(-100%); } }

        /* TENTANG KAMI */
        .tentang-kami { padding: 80px 8%; display: flex; align-items: center; gap: 50px; background: #fff; }
        .tentang-content { flex: 1; text-align: left; }
        .tentang-content h2 { font-size: 36px; color: #333; margin-bottom: 25px; }
        .tentang-content p { font-size: 18px; color: #555; line-height: 1.8; margin-bottom: 30px; }
        .tentang-image { flex: 1; display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; }
        /* Efek Dasar Foto */
.tentang-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    /* Menambahkan transisi agar gerakan mengapung halus */
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
}

/* Efek Mengapung saat kursor di atas foto */
.tentang-image img:hover {
    transform: translateY(-15px) scale(1.03); /* Mengapung ke atas 15px dan sedikit membesar */
    box-shadow: 0 15px 30px rgba(0,0,0,0.3); /* Bayangan menjadi lebih tebal dan turun ke bawah */
    z-index: 10;
    cursor: pointer;
}

/* Khusus foto pertama yang besar */
.tentang-image img:first-child {
    grid-column: span 2;
    height: 300px;
}
        .btn-selengkapnya { display: inline-block; padding: 12px 35px; background-color: #1178a2; color: white; text-decoration: none; border-radius: 50px; font-weight: bold; }

        /* VISI MISI */
        .visi-misi-section { display: none; padding: 80px 10%; background-color: #f4f7f5; text-align: center; }
        .visi-misi-section h2 { color: #1a4d33; font-size: 32px; margin-bottom: 50px; position: relative; display: inline-block; padding-bottom: 10px; }
        .visi-misi-section h2::after { content: ''; width: 60%; height: 4px; background: #00a65a; position: absolute; bottom: 0; left: 20%; }
        .container-box { display: flex; flex-direction: column; gap: 40px; align-items: center; }
        .box { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); width: 100%; max-width: 900px; text-align: left; border-left: 8px solid #00a65a; }
        .box h3 { color: #007944; margin-bottom: 20px; font-size: 26px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .box ul { list-style: none; }
        .box ul li { margin-bottom: 15px; display: flex; align-items: flex-start; gap: 15px; color: #444; line-height: 1.6; font-size: 17px; }
        .box ul li::before { content: "\f058"; font-family: "Font Awesome 5 Free"; font-weight: 900; color: #00a65a; font-size: 20px; }

        /* FEATURES */
        .features-section { padding: 80px 8%; background: white; text-align: center; }
        .feature-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 40px; }
        .feature-card {
    padding: 30px;
    border-radius: 12px;
    background: #f9f9f9;
    border-bottom: 4px solid #00a65a;
    /* Tambahkan transisi di sini */
    transition: all 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-10px); /* Efek mengapung */
    background: #ffffff;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
        .feature-card i { font-size: 40px; color: #00a65a; margin-bottom: 20px; }

        footer { background: #1a4d33; color: white; text-align: center; padding: 30px; }
    </style>
</head>
<body>
<head>
    <meta charset="UTF-8">
    <title>Home - MI ATTARBIYAH</title>
    
    <style>
        body {
            animation: fadeInPage 0.8s ease-in-out;
        }

        @keyframes fadeInPage {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
    <div class="top-bar">
    <div class="contact-info">
        <span><i class="fas fa-clock"></i> <span id="jam-berjalan">00:00:00</span></span>
        
        <span><i class="fas fa-map-marker-alt"></i> Jl.Sukasari RT 002 RW 006, Kota Tasikmalaya</span>
        <span><i class="fas fa-phone"></i> +6281321979571</span>
        <span><i class="fas fa-envelope"></i> miattarbiyah@gmail.com</span>
    </div>
</div>
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
                <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
              <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">
        Berita & Kegiatan <i class="fas fa-caret-down"></i>
    </a>
    <div class="dropdown-content">
        <a href="berita.php"><i class="fas fa-newspaper"></i> Berita</a>
        <a href="kegiatan.php"><i class="fas fa-calendar-alt"></i> Kegiatan</a>
    </div>
</li>
                <li class="dropdown">
    <a href="javascript:void(0)" class="nav-profil">
        <i class="fas fa-user-circle"></i> Profil Sekolah <i class="fas fa-caret-down"></i>
    </a>
    <div class="dropdown-content">
    <a href="sejarahsingkat.php"><i class="fas fa-history"></i> Sejarah Singkat</a>
    
    <a href="Misi2.php"><i class="fas fa-bullseye"></i> Visi dan Misi</a>
    
    <a href="profil.php"><i class="fas fa-chalkboard-teacher"></i> Guru dan Tenaga Kependidikan</a>
</div>
</li>

                <li>
                    <a href="login.php" style="text-decoration: none;">
                        <button class="btn-login"><i class="fas fa-user-shield"></i> Login Admin</button>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    

    <section class="hero">
        <div class="hero-content">
            <h3>MI ATTARBIYAH TASIKMALAYA</h3>
        </div>
    </section>

    <section class="tentang-kami">
        <div class="tentang-content">
            <h2>Tentang Kami</h2>
            <p>
               Madrasah Ibtidaiyah (MI) Attarbiyah adalah sebuah lembaga madrasah Formal yang memadukan pengetahuan umum dan agama dimana keseimbangan keduanya tetap terjaga. MI Attarbiyah didirikan oleh Yayasan Attarbiyah sukasari  pada tahun 2003 yang didirikan atas dasar kebutuhan masyarakat terhadap pendidikan disamping diwajibkannya oleh pemerintah yaitu wajib belajar sembilan tahun. Atas dasar kebutuhan masyarakat tersebut maka para tokoh mengumpulkan SDM yang ada disukasari untuk bisa mengelola lembaga ini dan mendidik putra putri masyarakat yang ada diwilayah madrasah ini. Dan alhamdulillah sampai saat ini MI Attarbiyah terus berjalan dan terus menunjukan kemajuan dengan menghasilkan lulusan yang tidak kalah dengan sekolah-sekolah atau madrasah-madrasah yang berada di wilayah Kecamatan Bungursari dan Alhamdulillah MI Attarbiyah tiap tahun selalu mendapatkan Prestasi dibidang apa saja, dan MI Attarbiyah selalu mengirimkan perwakilannya untuk ota Tasikmalaya di tingkat Provinsi Jawa Barat.
            </p>
            <a href="profil.php" class="btn-selengkapnya">Lebih lanjut</a>
        </div>
        <div class="tentang-image">
            <img src="tentangkami.jpg" alt="Kegiatan 1">
            <img src="tentangkami2.jpg" alt="Kegiatan 2">
            <img src="tentangkami3.jpg" alt="Kegiatan 3">
            <img src="tentangkami4.jpg" alt="Kegiatan 4">
            <img src="tentangkami5.jpg" alt="Kegiatan 5">
        </div>
    </section>
<div class="running-text-container">
    <div class="announcement-label">Pengumuman Ppdb :</div>
    <div class="moving-text">
    <?php echo $data_p['isi_pengumuman']; ?>
</div>
    </div>
</div>

    <section class="features-section">
        <h2 style="color: #1a4d33; font-size: 32px; margin-bottom: 10px;">Mengapa Memilih Kami?</h2>
        <div class="feature-grid">
            <div class="feature-card"><i class="fas fa-quran"></i><h4>Tahfidz Al-Qur'an</h4><p>Pembiasaan menghafal Al-Qur'an yang menyenangkan.</p></div>
            <div class="feature-card"><i class="fas fa-laptop-code"></i><h4>Literasi Digital</h4><p>Pengenalan teknologi informasi sejak dini.</p></div>
            <div class="feature-card"><i class="fas fa-mosque"></i><h4>Karakter Islami</h4><p>Pengenalan sholat duha dan karakter mulia.</p></div>
            <div class="feature-card"><i class="fas fa-users"></i><h4>Ekskul Variatif</h4><p>Wadah pengembangan bakat dan minat siswa.</p></div>
        </div>
    </section>
    <section id="sejarah-singkat" class="visi-misi-section" style="display: none; background-color: #ffffff;">
    <h2>Sejarah Singkat</h2>
    <div class="container-box">
        <div class="box" style="text-align: justify; line-height: 1.8;">
            <p>MI Attarbiyah secara geografis terletak di Kelurahan Bungursari Kecamatan Bungursari dengan luas wilayah sebesar 18.2 KM2. Batas Wilayah Utara Kecamatan Indihiang, Timur Kecamatan Cipedes, Selatan Kecamatan Mangkubumi dan sebelah Barat Kabupaten Tasikmalaya, sedangkan luas wilayah Kecamatan Bungursari Menurut Tata Guna Lahan Pemukiman 357.91 Ha, Pesawahan 610.99 Ha, Perkebunan 273.59 Ha, Pekuburan 17.96 Ha, Pekarangan 134.41 Ha, Taman 2.07 Ha, Perkantoran 8.82 Hadan Lainnya 30.59 Ha (sumber http://www.tasikmalayakota.go.id/statis-156-kec-bungursari.html).</p>
            <br>
            <p>Melalui kondisi Geografis ini MI Attarbiyah merupakan wilayah yang termasuk di sebelah timur dari kelurahan dan kecamatan sekitar 1 km dan berbatasan langsung dengan dua kelurahan yaitu keluarahan Sukajaya dan kelurahan Sukarindik, maka dari itu MI Attarbiyah memiliki potensi yang variatif. Selain itu pula, posisi MI Attarbiyah input siswanya secara geografis mengacu tersebar di tiga kelurahan tersebut yang berbatasan langsung dengan Kampung Sukasari diantaranya : Keluarahan Bungursari yang menjadi kelurahannya MI Attarbiyah, Kelurahan Sukajaya Yang berbatasan langsung disebelah selatan, dan kelurahan Sukarindik yang berbatasan langsung disebelah timur.</p>
            <br>
            <p>Kondisi Pesawahan dengan angka 610.99 Hal ini lebih dominan di MI Attarbiyah, pegunungan pula menjadi potensi tersendiri sehingga secara geografis MI Attarbiyah kedepan akan mengalami perubahan situasi, diantaranya dari pesawahan dan pegunungan akan berubah menjadi pemukiman sebab pegunungan yang ada hampir punah karena faktor galian C.</p>
            
            <div style="text-align: center; margin-top: 30px;">
                <button id="btn-tutup-sejarah" style="padding: 10px 25px; background: #e74c3c; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                    Tutup Sejarah
                </button>
            </div>
        </div>
    </div>
</section>
</section>
<section id="lokasi" style="padding: 20px; text-align: center;">
    <h3>Lokasi Kami</h3>
    <p>Jl. Sukasari RT 002 RW 006, Kota Tasikmalaya</p>
    
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.717625715587!2d108.17976596242399!3d-7.304899637785598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5138e1ab538b%3A0x48646033bdee5148!2sMIS%20ATTARBIYAH!5e0!3m2!1sid!2sid!4v1769828816904!5m2!1sid!2sid" 
        width="100%" 
        height="450" 
        style="border:0; border-radius: 10px;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>
<footer style="background-color: #2c3e50; color: white; padding: 30px 20px; text-align: center; margin-top: 20px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="margin-bottom: 15px;">
                <h2 style="margin: 0;">MIS ATTARBIYAH</h2>
                <p style="font-size: 0.9rem; opacity: 0.8;">Membentuk Generasi Berakhlak Mulia dan Berprestasi</p>
            </div>
            
            <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 20px 0;">
            
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; font-size: 0.85rem;">
                <span>📍 Jl. Sukasari RT 002 RW 006, Kota Tasikmalaya</span>
                <span>📧 info@misattarbiyah.sch.id</span>
                <span>📞 +6281321979571 </span>
            </div>
            
            <div style="margin-top: 25px; font-size: 0.8rem; opacity: 0.6;">
                &copy; 2026 MIS ATTARBIYAH. All Rights Reserved.
            </div>
        </div>
    </footer>

    <footer>
        <p>&copy; 2026 MI Attarbiyah Tasikmalaya. Membangun Generasi Islami & Digital.</p>
    </footer>
<script>
    // 1. Ambil elemen untuk Visi Misi
    const sectionVisiMisi = document.getElementById('visi-misi');
    const btnVisiDrop = document.getElementById('nav-visi-misi-drop');

    // 2. Fungsi menampilkan section Visi Misi
    function tampilkanVisiMisi(e) {
        e.preventDefault(); 
        
        // Cek apakah elemen ada agar tidak error
        if (sectionVisiMisi) {
            // Pastikan section terlihat
            sectionVisiMisi.style.display = 'block'; 
            
            // Beri sedikit jeda agar proses render 'block' selesai sebelum scroll
            setTimeout(() => {
                sectionVisiMisi.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start' 
                });
            }, 50);
        }
    }

    // 3. Pasang event listener ke tombol dropdown Visi Misi
    if(btnVisiDrop) {
        btnVisiDrop.addEventListener('click', tampilkanVisiMisi);
    }

    /* CATATAN: 
       Script Sejarah Singkat dihapus dari sini karena 
       Sejarah sudah pindah ke file sejarah.php. 
       Pastikan di bagian menu, linknya sudah: <a href="sejarah.php">Sejarah</a>
    */
</script>

    <footer>
    </footer>
<script>
    // 1. Ambil elemen untuk Visi Misi
    const sectionVisiMisi = document.getElementById('visi-misi');
    const btnVisiDrop = document.getElementById('nav-visi-misi-drop');

    // 2. Fungsi menampilkan section Visi Misi
    function tampilkanVisiMisi(e) {
        e.preventDefault(); 
        
        // Cek apakah elemen ada agar tidak error
        if (sectionVisiMisi) {
            // Pastikan section terlihat
            sectionVisiMisi.style.display = 'block'; 
            
            // Beri sedikit jeda agar proses render 'block' selesai sebelum scroll
            setTimeout(() => {
                sectionVisiMisi.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start' 
                });
            }, 50);
        }
    }

    // 3. Pasang event listener ke tombol dropdown Visi Misi
    if(btnVisiDrop) {
        btnVisiDrop.addEventListener('click', tampilkanVisiMisi);
    }

    /* CATATAN: 
       Script Sejarah Singkat dihapus dari sini karena 
       Sejarah sudah pindah ke file sejarah.php. 
       Pastikan di bagian menu, linknya sudah: <a href="sejarah.php">Sejarah</a>
    */
</script><script>
    function updateJam() {
        const sekarang = new Date();
        
        // Mengambil jam, menit, dan detik
        let jam = sekarang.getHours().toString().padStart(2, '0');
        let menit = sekarang.getMinutes().toString().padStart(2, '0');
        let detik = sekarang.getSeconds().toString().padStart(2, '0');
        
        // Format waktu menjadi HH:MM:SS
        const waktuString = jam + ":" + menit + ":" + detik;
        
        // Masukkan ke dalam elemen HTML
        document.getElementById('jam-berjalan').textContent = waktuString;
    }

    // Jalankan fungsi setiap 1 detik (1000 milidetik)
    setInterval(updateJam, 1000);

    // Jalankan langsung saat halaman pertama kali dimuat
    updateJam();
</script>