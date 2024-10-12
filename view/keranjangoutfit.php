<?php
session_start();

$koneksi = new mysqli("localhost","root","","gym");

if(empty($_SESSION["keranjangoutfit"]) OR !isset($_SESSION["keranjangoutfit"]))
{
    echo "<script>alert('Keranjang kosong, Silahkan belanja');</script>";
    echo "<script>location = 'outfit.php';</script>"; 
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
                        <th>Product Outfit</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subharga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; 
                    $totalbelanja=0;?>
                    <?php foreach ($_SESSION["keranjangoutfit"] as $id_outfit => $jumlah): ?> 
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM outfit WHERE id_outfit='$id_outfit'");
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
                            <a href="hapuskeranjang.php?id_outfit=<?php echo $id_outfit ?>" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                        $nomor++;
                        $totalbelanja += $subharga;
                    } else {
                        
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

            <a href="outfit.php" class="btn btn-outline-dark mt-auto">Lanjutkan Belanja</a>
            <a href="checkoutoutfit.php" class="btn btn-outline-dark mt-auto">Checkout</a>  
        </div> 
    </section>

    <?php include 'nav-bawah.php' ?>

</body>
</html>
<?php
// Menyimpan total belanja ke dalam sesi untuk digunakan di halaman checkout
$_SESSION['totalbelanja'] = $totalbelanja;
?>
