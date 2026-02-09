<?php
$conn = mysqli_connect("localhost", "root", "", "db_admin");

if (isset($_POST["submit"])) {
    $id = $_POST["id_user"];
    $nama_file = $_FILES["foto"]["name"];
    $tmp_name = $_FILES["foto"]["tmp_name"];
    
    // Pindahkan file ke folder yang sama dengan script
    if (move_uploaded_file($tmp_name, $nama_file)) {
        // Update nama file di database
        mysqli_query($conn, "UPDATE users SET foto = '$nama_file' WHERE id = $id");
        echo "<script>alert('Foto berhasil diupdate!'); window.location='profil.php';</script>";
    }
}

$users = mysqli_query($conn, "SELECT id, nama FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Foto Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-body">
            <h5>Upload Foto Guru</h5>
            <form action="" method="post" enctype="multipart/form-data">
                <label>Pilih Guru:</label>
                <select name="id_user" class="form-control mb-3">
                    <?php while($u = mysqli_fetch_assoc($users)) : ?>
                        <option value="<?= $u['id']; ?>"><?= $u['nama']; ?></option>
                    <?php endwhile; ?>
                </select>
                
                <label>Pilih Foto:</label>
                <input type="file" name="foto" class="form-control mb-3" required>
                
                <button type="submit" name="submit" class="btn btn-success w-100">Simpan Foto</button>
            </form>
            <br>
            <a href="profil.php">Kembali ke Profil</a>
        </div>
    </div>
</body>
</html>