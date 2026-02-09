<?php 
session_start();
include 'config.php';
if($_SESSION['role'] != "admin"){ header("location:login.php"); exit(); }

// Simulasi data log (Jika sudah ada table log di database, bisa ditarik dengan query)
$logs = [
    ['waktu' => '2026-01-26 15:24', 'ip' => '192.168.1.10', 'status' => 'Sukses'],
    ['waktu' => '2026-01-25 09:12', 'ip' => '192.168.1.15', 'status' => 'Sukses'],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - MI Attarbiyah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 0; display: flex; background: #f4f7f6; }
        
        /* SIDEBAR */
        .sidebar { width: 250px; height: 100vh; background: #1a4d33; color: white; padding: 20px; position: fixed; }
        .sidebar h3 { border-bottom: 2px solid #00a65a; padding-bottom: 10px; }
        .sidebar a { display: block; color: white; text-decoration: none; padding: 12px; margin: 5px 0; border-radius: 5px; transition: 0.3s; }
        .sidebar a:hover { background: #00a65a; }
        
        /* MAIN CONTENT */
        .main-content { margin-left: 280px; padding: 30px; width: 100%; }
        
        /* KOMPONEN KEAMANAN */
        .alert-warning {
            background: #fff3cd; color: #856404; padding: 15px; 
            border-left: 5px solid #ffc107; margin-bottom: 20px; border-radius: 4px;
        }

        .card {
            background: white; padding: 20px; border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 25px;
        }

        /* FORM GANTI PASSWORD (HIDDEN BY DEFAULT) */
        #formGantiPassword { display: none; margin-top: 20px; background: #e9ecef; padding: 20px; border-radius: 8px; }
        
        input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        .btn-save { background: #00a65a; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }

        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background: #00a65a; color: white; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Admin MI</h3>
        <p><i class="fas fa-user-shield"></i> <?php echo $_SESSION['nama']; ?></p>
        <hr>
        <a href="#"><i class="fas fa-home"></i> Dashboard</a>
        <a href="#" onclick="showSection('password')"><i class="fas fa-key"></i> Ganti Password</a>
        <a href="#" onclick="showSection('log')"><i class="fas fa-history"></i> Log Aktivitas</a>
        <a href="logout.php" style="color: #ff6b6b; font-weight: bold; margin-top: 50px;"><i class="fas fa-sign-out-alt"></i> Keluar</a>
    </div>

    <div class="main-content">
        
        <div class="alert-warning">
            <strong><i class="fas fa-shield-alt"></i> Tips Keamanan:</strong> <br>
            Jika ini login pertama Anda, segera <b>Ganti Password</b> untuk menghindari akses yang tidak diinginkan.
        </div>

        <div id="sectionPassword" class="card" style="display:none;">
            <h3><i class="fas fa-lock"></i> Pengaturan Password Baru</h3>
            <form action="update_password.php" method="POST">
                <label>Password Lama:</label>
                <input type="password" name="old_pass" required>
                <label>Password Baru:</label>
                <input type="password" name="new_pass" required>
                <button type="submit" class="btn-save">Update Password</button>
                <button type="button" onclick="hideAll()" style="background:gray; border:none; color:white; padding:10px; border-radius:4px;">Batal</button>
            </form>
        </div>

        <div id="sectionLog" class="card" style="display:none;">
            <h3><i class="fas fa-list"></i> Riwayat Login Terakhir</h3>
            <table>
                <tr>
                    <th>Waktu Login</th>
                    <th>Alamat IP</th>
                    <th>Status</th>
                </tr>
                <?php foreach($logs as $l): ?>
                <tr>
                    <td><?php echo $l['waktu']; ?></td>
                    <td><?php echo $l['ip']; ?></td>
                    <td><span style="color:green;"><i class="fas fa-check-circle"></i> <?php echo $l['status']; ?></span></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <button type="button" onclick="hideAll()" style="margin-top:10px;">Tutup</button>
        </div>

        <div class="card">
            <h2>Daftar Siswa</h2>
            <table>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM siswa");
                while($d = mysqli_fetch_assoc($sql)){
                    echo "<tr>
                            <td>".$no++."</td>
                            <td>".$d['nis']."</td>
                            <td>".$d['nama_siswa']."</td>
                            <td>".$d['kelas']."</td>
                            <td><a href='hapus.php?id=".$d['id_siswa']."' style='color:red;'>Hapus</a></td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </div>

    <script>
        // Fungsi untuk memunculkan bagian yang dipilih
        function showSection(type) {
            hideAll();
            if(type === 'password') {
                document.getElementById('sectionPassword').style.display = 'block';
            } else if(type === 'log') {
                document.getElementById('sectionLog').style.display = 'block';
            }
        }

        // Fungsi untuk menyembunyikan semua section tambahan
        function hideAll() {
            document.getElementById('sectionPassword').style.display = 'none';
            document.getElementById('sectionLog').style.display = 'none';
        }
    </script>

</body>
</html>