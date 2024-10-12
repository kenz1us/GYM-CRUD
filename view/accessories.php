<?php
session_start();
if ($_SESSION['status_login'] != 'sudah_login') {
    $_SESSION['pesan'] = "anda harus login terlebih dahulu";
    header("location:../auth/login.php");
}
include 'nav.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Product Member Card - GYMShark</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .header-bg {
            background: url('../img/Sam.jpeg') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
    <body>
    <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4">
                    <div class="col text-start">
                        <a  href="fasilitas.php" class="btn btn-outline-dark mt-auto">Kembali</a><br><br>
                       
                    </div>
                    <div class="col text-end">
                        
                        <a  href="keranjangacc.php" class="btn btn-outline-dark mt-auto">Liat Keranjang</a><br><br>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php 
                    $koneksi= new mysqli("localhost","root","","gym");
                    $ambil = $koneksi->query("SELECT * FROM acc"); ?>
                    <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="../img/<?php echo $perproduk['foto'];?>" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder" ><?php echo $perproduk['nama'];?></h5>
                                    </div>
                                    <h5 class="text-center" >Rp. <?php echo number_format($perproduk['harga']);?></h5>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a style="width: 75%;" href="beliacc.php?id_acc=<?php echo $perproduk['id_acc'];?>" class="btn btn-outline-dark mt-auto">Beli</a>
							      
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>       
                              
                </div>
            </div>
        </section> 
    <?php include 'nav-bawah.php' ?>
    </body>
</html>

