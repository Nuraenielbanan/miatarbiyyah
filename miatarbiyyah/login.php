<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - MI Attarbiyah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Gaya dasar agar tetap keren */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: #f0f2f5; height: 100vh; display: flex; justify-content: center; align-items: center; }
        .login-container { display: flex; width: 850px; height: 500px; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.2); }
        .login-left { flex: 1; padding: 40px; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #fff; }
        .login-right { flex: 1; background: #1a4d33; padding: 50px; color: white; display: flex; flex-direction: column; justify-content: center; }
        
        /* Form Styling */
        .input-group { margin-bottom: 20px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.5); }
        .input-group i { position: absolute; top: 10px; }
        .input-group input { width: 100%; padding: 10px 10px 10px 35px; background: none; border: none; color: white; outline: none; }
        .btn-submit { width: 100%; padding: 12px; background: white; color: #1a4d33; border: none; border-radius: 25px; font-weight: bold; cursor: pointer; transition: 0.3s; }
        .btn-submit:hover { background: #e0e0e0; transform: translateY(-2px); }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-left">
            <img src="logo1.jpg" width="80" alt="Logo">
            <h2 style="color: #1a4d33; margin-top: 10px;">MI ATTARBIYAH</h2>
            <img src="lucu.jpg" width="250" alt="Ilustrasi" style="margin-top: 20px;">
        </div>

        <div class="login-right">
            <h1 style="text-align: center; margin-bottom: 30px;">Login Admin</h1>
            
            <form action="admin_dasbord.php" method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn-submit">KIRIM</button>
            </form>

            <a href="index.php" style="color: white; text-align: center; display: block; margin-top: 20px; font-size: 13px; text-decoration: none; opacity: 0.7;">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </div>

</body>
</html>