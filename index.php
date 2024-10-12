<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo1.png">
    
    <title>GYMShark</title>
</head>
<body>  
    <div class="hero">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo1.png" class="logo" alt="Logo" width="100" height="120">
                    <h3 style="font-weight: bold; display: inline; padding-right: 50px; ">GYMShark</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#programs">Our Programs</a>
                        </li>
                        <?php if(isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="auth/logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" ><?php echo "Hai, ".htmlspecialchars($_SESSION['username']); ?></a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="auth/login.php">Join Now</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div class="content">
            <h1>BUILD YOUR BODY GOALS !!!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt unde, sequi perspiciatis<br> 
            sapiente laudantium optio aliquam ratione atque rem, consequatur iusto?<br><br></p>
            <?php if(isset($_SESSION['username'])): ?>
                <a class="btn btn-primary" href="view/fasilitas.php"><?php echo "LIHAT PRODUCT GYM KAMI !!"; ?></a>  
            <?php else: ?>
                <a class="btn btn-primary" href="auth/login.php">DAFTAR SEKARANG</a>
            <?php endif; ?>
        </div>
    </div>

    
    
    <section id="about-us">
    <div class="content2">
        <div class="container">
            <div class="row text-start">
                <div class="col">
                    <h2 style="font-weight: bold; font-size: 3rem; " >Transform Your<br><span>Fitnes Journey</span></h2>
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed officia, sapiente voluptatem optio voluptas asperiores excepturi, quod, quasi itaque vitae quae et voluptatum nulla. Consequatur voluptatem accusamus, corrupti beatae, quae vitae nostrum, nesciunt quod perferendis minima distinctio alias. Numquam modi exercitationem, fugiat obcaecati aliquid cupiditate odio harum, culpa officiis, nulla ex?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content3">
        <div class="container">
            <div class="row text-start">
                <div class="col">
                    <img src="img/orang.png" alt="">
                </div>
                <div class="col text-end">
                <h2 style=" padding-top: 80px; font-weight: bold; font-size: 3rem;" >About Us<br><span>The Best GYM</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, a fugit. Sunt nisi temporibus ullam omnis odio quas, 
                    facilis explicabo similique, rem qui labore suscipit deleniti reiciendis fugiat harum est consectetur tempore praesentium 
                    debitis pariatur reprehenderit! Molestias iste voluptatem, corporis sequi odio alias, dolor itaque aspernatur expedita in 
                    laboriosam, cumque explicabo?<br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi voluptatem quibusdam quae voluptate fuga eveniet numquam placeat reprehenderit iusto, repudiandae aut vero dolores quas magnam. Magni dolores ipsum accusamus alias autem obcaecati eveniet praesentium odit, pariatur quo nostrum dolore nam reiciendis?</p>
                </div>
            </div>   
        </div>
    </div>
    </section>
    
    <section id="programs" >
    <div class="service">
        <div class="tittle">
            <h2 style="font-weight: bold; font-size: 3rem; " >OUR <span>PROGRAMS</span></h2>
        </div>

        <!-- bars -->
        <div class="box">
            <div class="card">
                <i class="fas fa-bars"></i>
                <h2 style="font-weight: bold; font-size: 2rem; color: white; " >FITNES STUDIO</h2><br>
                <div class="pra">
                    <img src="img/ORANG2.png" class="logo" alt="Logo" width="80%" height="80%">
                    <p style="text-align: center ;">
                        <a class="btn btn-primary" href="#">GABUNG SEKARANG</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-bars"></i>
                <h2 style="font-weight: bold; font-size: 2rem; color: white; " >YOGA CLASSES</h2><br>
                <div class="pra">
                    <img src="img/ORANG4.png" class="logo" alt="Logo" width="69%" height="69%">
                    <p style="text-align: center ;">
                        <a class="btn btn-primary" href="#">GABUNG SEKARANG</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-bars"></i>
                <h2 style="font-weight: bold; font-size: 2rem; color: white; " >PERSONAL TRAINER</h2>
                <div class="pra">
                    <img src="img/ORANG3.png" class="logo" alt="Logo" width="77%" height="77%">   
                    <p style="text-align: center ;">
                        <a class="btn btn-primary" href="#">GABUNG SEKRANG</a>
                    </p>
                </div>
            </div>
    </div>

    <div class="content2">
        <div class="container">
            <div class="row text-start">
                <div class="col text-center">
                    <p>© 2024 ARIF RAHMAN HUZAIFA
                </div>
            </div>
        </div>
    </div>
    </section>




    


    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script type="module" src="js/function.js"> </script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
