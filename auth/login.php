<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
        background-image: url(../img/gym4.jpg);
        background-size: cover;
        background-position: center;
        background-color: rgba(25, 25, 25, 0.8); /* Menambahkan opacity pada background */
        backdrop-filter: blur(8px); /* Menambahkan efek blur */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0; /* Menghilangkan margin agar tampilan lebih rapi */
        }
        .login-container {
            background: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 300%;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-container .form-control {
            margin-bottom: 15px;
        }
        .login-container .btn {
            width: 100%;
        }
        .login-container select.form-select {
            margin-bottom: 15px;
            
        }
    </style>
</head>
<body>
    <?php
    session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pilihan = $_POST["pilihan"];

            // Lakukan validasi dan otentikasi pengguna di sini

            // Setelah validasi, arahkan pengguna ke halaman yang sesuai
            if ($pilihan == "Umum") {
                header("Location: login_umum.php");
                exit; // Penting untuk menghentikan eksekusi skrip setelah mengarahkan
            } elseif ($pilihan == "Admin") {
                header("Location: login_admin.php");
                // Lakukan penanganan untuk login mahasiswa
            } else {
                
            }
        }
    ?>
    <div class="login-container">
        <h2>Masuk Sebagai Pengguna</h2>
        <form action="login.php" method="post">
        <?php
            // membaca session
            if(isset($_SESSION['pesan'])){
                echo '<div id="alert" class="alert alert-warning" role="alert">' . $_SESSION['pesan'] . '</div>';
            }
            ?>
            <div class="mb-3">
                <select name="pilihan" class="form-select" required>
                    <option value="" disabled selected>Pilih Jenis Pengguna</option>
                    <option value="Umum">Umum</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
            <div class="d-grid">
                <input type="submit" class="btn btn-primary" value="Next" >
            </div>
        </form>
    </div>
    <script>
    // fungsi untuk menyembunyikan alert setelah 5 detik
    setTimeout(function() {
        var alertElement = document.getElementById('alert');
        if (alertElement) {
            alertElement.style.display = 'none';
        }
    }, 2000); // 5000 milidetik = 5 detik
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+2GmO3eRb1Gl9xH/1BIeKnS30ItwN" crossorigin="anonymous"></script>
</body>
</html>
