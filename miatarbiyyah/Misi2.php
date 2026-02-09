<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tabel_profil WHERE id = 1");
$data  = mysqli_fetch_assoc($query);
$visi_db = isset($data['visi']) ? $data['visi'] : "Visi belum diatur.";
$misi_db = isset($data['misi']) ? $data['misi'] : "Misi belum diatur.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - MI ATTARBIYAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a4d33;
            --secondary-color: #00a65a;
            --accent-color: #f39c12;
            --bg-light: #f8faf9;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        
        body { background-color: var(--bg-light); color: #333; line-height: 1.6; }

        /* Header dengan Efek Overlay */
        .header-visi { 
            background: linear-gradient(rgba(26, 77, 51, 0.8), rgba(26, 77, 51, 0.9)), 
                        url('https://images.unsplash.com/photo-1523050853064-8521ef395828?auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white; 
            padding: 100px 8% 140px; 
            text-align: center; 
        }

        .header-visi h1 { font-size: 3rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; }
        .header-visi p { font-size: 1.1rem; opacity: 0.9; font-weight: 300; }

        /* Container Main */
        .container { 
            max-width: 1000px; 
            margin: -80px auto 50px; 
            padding: 0 20px;
            position: relative;
        }

        /* Card Visi */
        .card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .card:hover { transform: translateY(-5px); }

        .section-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            color: var(--primary-color);
        }

        .section-title i {
            background: var(--secondary-color);
            color: white;
            padding: 12px;
            border-radius: 12px;
            font-size: 1.5rem;
        }

        /* Styling Visi */
        .box-visi { 
            font-size: 24px; 
            color: var(--primary-color); 
            text-align: center; 
            font-weight: 600;
            line-height: 1.4;
            position: relative;
            padding: 20px;
        }

        .box-visi::before { content: '"'; font-size: 60px; color: var(--secondary-color); opacity: 0.3; position: absolute; left: 0; top: -20px; }

        /* Styling Misi dengan List */
        .misi-list { list-style: none; }
        .misi-item {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 10px;
            border-left: 5px solid var(--secondary-color);
        }

        .misi-item i { color: var(--secondary-color); margin-top: 5px; }

        /* Button */
        .btn-kembali { 
            display: inline-block; 
            padding: 15px 40px; 
            background: var(--primary-color); 
            color: white; 
            text-decoration: none; 
            border-radius: 50px; 
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(26, 77, 51, 0.3);
        }

        .btn-kembali:hover { background: var(--secondary-color); transform: scale(1.05); }

    </style>
</head>
<body>

    <div class="header-visi">
        <h1>Visi & Misi</h1>
        <p><i class="fas fa-graduation-cap"></i> MEWUJUDKAN GENERASI UNGGUL, ISLAMI & DIGITAL</p>
    </div>

    <div class="container">
        <div class="card">
            <div class="section-title">
                <i class="fas fa-eye"></i>
                <h2>Visi Sekolah</h2>
            </div>
            <div class="box-visi">
                <?php echo $visi_db; ?>
            </div>
        </div>

        <div class="card">
            <div class="section-title">
                <i class="fas fa-bullseye"></i>
                <h2>Misi Sekolah</h2>
            </div>
            <div class="misi-list">
                <?php 
                // Memecah misi berdasarkan baris baru agar menjadi list yang rapi
                $misi_points = explode("\n", $misi_db);
                foreach ($misi_points as $point) {
                    if (trim($point) != "") {
                        echo '<div class="misi-item">
                                <i class="fas fa-check-circle"></i>
                                <span>' . trim($point) . '</span>
                              </div>';
                    }
                }
                ?>
            </div>
        </div>

        <center>
            <a href="index.php" class="btn-kembali"><i class="fas fa-arrow-left"></i> Kembali ke Beranda</a>
        </center>
    </div>

</body>
</html>