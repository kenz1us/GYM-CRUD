<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Product Detail - GYMShark</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css">
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
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="fasilitas.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="btn btn-primary"><?php echo "Hai, ".htmlspecialchars($_SESSION['username']); ?></a>
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

    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- <script type="module" src="../js/function.js"> </script> -->
</body>
</html>
