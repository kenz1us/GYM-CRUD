<?php

require_once("../vendor/koneksi.php");

if (isset($_POST['admin'])) {

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $nohp = filter_input(INPUT_POST, 'nohp', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = md5($_POST["password"]);

    // menyiapkan query
    $sql = "INSERT INTO admin (name, username, password, nohp) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // cek apakah prepare berhasil
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    // bind parameter ke query
    $stmt->bind_param("ssss", $name, $username, $password, $nohp);

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute();

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if ($saved) {
        header("Location: login_admin.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN KE GYMSHARK</title>
    <link rel="stylesheet" href="../css/style.css">
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
        .daftarmahasiswa-container {
        background: #fff;
        padding: 70px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.5); /* Menggunakan nilai opacity yang lebih rendah untuk efek bayangan yang lebih pekat */
        }
        .daftarmahasiswa-container h2 {
            margin-bottom: 20px;
        }
        .daftarmahasiswa-container input[type="text"],
        .daftarmahasiswa-container input[type="password"] {
            margin-bottom: 20px;
        }
        .daftarmahasiswa-container input[type="submit"] {
            width: 100%;
        }
    </style>
</head>
<body>
    
    <?php
    session_start();
    ?>
        <div class="daftarmahasiswa-container">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/logo1.png" class="logo" alt="Logo" width="100" height="120">
                <h3 style="font-weight: bold; display: inline; padding-right: 50px; ">GYMShark</h3>
            </a>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input class="form-control" type="text" name="name" placeholder="Nama kamu" required/>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" required />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" required/>
                </div>

                <div class="form-group">
                    <label for="nohp">Nomor Telephone</label>
                    <input class="form-control" type="number" name="nohp" placeholder="Nomor Telephone" required/>
                </div><br>
                

                <input type="submit" class="btn btn-success btn-block" name="admin" value="Daftar" />

            </form>
            
        </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+2GmO3eRb1Gl9xH/1BIeKnS30ItwN" crossorigin="anonymous"></script>
</body>
</html>
