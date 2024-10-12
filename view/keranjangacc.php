<?php
session_start();

$koneksi = new mysqli("localhost","root","","gym");

if(empty($_SESSION["keranjangacc"]) OR !isset($_SESSION["keranjangacc"]))
{
    echo "<script>alert('Keranjang kosong, Silahkan belanja');</script>";
    echo "<script>location = 'accessories.php';</script>"; 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

    <?php include 'nav.php'; ?>

    <section class="kontent">
        <div class="container">
            <h1 style="padding-top: 40px;" class="text-start" >Keranjang Belanja</h1>
            <hr>
            <table class="table table-bordered">
    <thead>
    <?php include('pesan.php'); ?>
        <tr>
            <th>No</th>
            <th>Product Accessories</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subharga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $nomor = 1; 
        $totalbelanja = 0; // Pindahkan inisialisasi totalbelanja di luar loop
        ?>
        
        <?php foreach ($_SESSION["keranjangacc"] as $id_acc => $jumlah): ?> 
        <?php
        $ambil = $koneksi->query("SELECT * FROM acc WHERE id_acc='$id_acc'");
        $pecah = $ambil->fetch_assoc();
        if ($pecah) {
            $subharga = $pecah["harga"] * $jumlah;
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah["nama"]; ?></td>
            <td><?php echo number_format($pecah["harga"]); ?></td>
            <td><?php echo $jumlah; ?></td>
            <td>Rp. <?php echo number_format($subharga); ?></td>
            <td>
                <a href="hapuskeranjang.php?id_acc=<?php echo $id_acc ?>" class="btn btn-danger btn-xs">Hapus</a>
            </td>
        </tr>
        
        <?php 
            $nomor++;
            $totalbelanja += $subharga; // Pindahkan penambahan subharga ke totalbelanja di dalam blok if
        } else {
            // Handle error jika data tidak ditemukan
        }
        ?>
        
        <?php endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4">Total belanja</th>
            <th>Rp. <?php echo number_format($totalbelanja) ?></th>
        </tr>
    </tfoot>
</table>
        <div>
            <a href="accessories.php" class="btn btn-outline-dark mt-auto">Lanjutkan Belanja</a>
            <a href="checkoutacc.php" class="btn btn-outline-dark mt-auto">Checkout</a>  
        </div> 
    </section>
    <?php include 'nav-bawah.php' ?>

</body>
</html>
<?php
// Menyimpan total belanja ke dalam sesi untuk digunakan di halaman checkout
$_SESSION['totalbelanja'] = $totalbelanja;
?>
