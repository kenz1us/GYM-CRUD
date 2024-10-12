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
        .login-container {
            background: #fff;
            padding: 70px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5); /* Menggunakan nilai opacity yang lebih rendah untuk efek bayangan yang lebih pekat */
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            margin-bottom: 20px;
        }
        .login-container input[type="submit"] {
            width: 100%;
        }
        .back-button {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #000;
            margin-bottom: 20px; /* Memberikan jarak antara tombol kembali dan input */
        }
        .back-button img {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    ?>
    <div class="login-container">
        <a class="navbar-brand" href="index.php">
        <a href="../index.php" class="back-button">
        <svg style="height: 30px; width: 25px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path d="M459.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4L288 214.3V256v41.7L459.5 440.6zM256 352V256 128 96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160C4.2 237.5 0 246.5 0 256s4.2 18.5 11.5 24.6l192 160c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V352z"/></svg>     
        </a>
            <img src="../img/logo1.png" class="logo" alt="Logo" width="100" height="120">
            <h3 style="font-weight: bold; display: inline; padding-right: 50px; ">GYMShark</h3>
        </a>
        <form action="../vendor/prosesloginadmin.php" method="post">
            
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="d-grid">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <!-- <div class="row text-end">  
                <div class="col">
                    <a href="daftaradmin.php" ><h2 style="font-size: 12px;  " class="text-primary"  ><br>Belum Punya Akun<br></h2></a>
                </div>
            </div> -->
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+2GmO3eRb1Gl9xH/1BIeKnS30ItwN" crossorigin="anonymous"></script>
</body>
</html>
