<?php
session_start();
if ($_SESSION['status_login'] != 'sudah_login') {
    $_SESSION['pesan'] = "anda harus login terlebih dahulu";
    header("location:../auth/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css">
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
        <!-- Navigation-->
        <div class="hero">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <a class="navbar-brand" href="../index.php">   
                    <h3 style="font-weight: bold; display: inline; padding-right: 50px;"><i style="padding-right: 10px;" class="fa-solid fa-dumbbell"></i>GYMShark</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="fasilitas.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                Product
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="suplement.php">Suplement</a></li>
                                <li><a class="dropdown-item" href="member-card.php">Member Card</a></li>
                                <li><a class="dropdown-item" href="accessories.php">Accessories</a></li>
                                <li><a class="dropdown-item" href="outfit.php">Outfit</a></li>
                             </ul>
                        </li>
                        <?php if(isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../auth/logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" ><?php echo "Hai, ".htmlspecialchars($_SESSION['username']); ?></a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="../auth/login.php">Join Now</a>
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </nav>
        </div>
        
        <!-- Header-->
        <header class="bg-dark py-5 header-bg">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Product GYMShark</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop homepage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                
                
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="../img/susu1.png" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Suplement</h5>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="suplement.php">Lihat Product</a>
                                </div>
                                </div>
                            </div>
                        </div>
                
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../img/member1.png" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Member Card </h5>
                                    <!-- Product price-->
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="member-card.php">Lihat Product</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../img/acc1.png" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Accessories</h5>
                                    <!-- Product price-->
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="accessories.php">Lihat Product</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../img/ootd1.png" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Outfit</h5>
                                    <!-- Product price-->
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="outfit.php">Lihat Product</a></div>
                            </div>
                        </div>
                    </div> 
                              
                </div>
            </div>
        </section>
        <!-- Footer-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,202.7C384,181,480,107,576,101.3C672,96,768,160,864,202.7C960,245,1056,267,1152,266.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <footer class="py-5 bg-dark">
            
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; ARIF RAHMAN HUZAIFA</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
    </body>
</html>
