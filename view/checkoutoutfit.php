<?php
session_start();

if ($_SESSION['status_login'] != 'sudah_login') {
    $_SESSION['pesan'] = "anda harus login terlebih dahulu";
    header("location:../auth/login.php");
}

$koneksi = new mysqli("localhost", "root", "", "gym");

if (empty($_SESSION["keranjangoutfit"]) OR !isset($_SESSION["keranjangoutfit"])) {
    echo "<script>alert('Keranjang kosong, Silahkan belanja');</script>";
    echo "<script>location = 'outfit.php';</script>";
    exit();
}

if (!isset($_SESSION['totalbelanja'])) {
    echo "<script>alert('Terjadi kesalahan, silahkan ulangi proses belanja.');</script>";
    echo "<script>location = 'keranjangoutfit.php';</script>";
    exit();
}

if (isset($_POST['checkoutoutfit'])) {
    $id_user = $_SESSION['username'];
    $tanggal_pembelian = date("Y-m-d");
    $total_pembelian = $_SESSION['totalbelanja'];
    $alamat_pengiriman = $_POST['alamat_pengiriman'];
    $pembayaran= $_POST['pembayaran'];

    $koneksi->query("INSERT INTO pembelian (username, tanggal_pembelian, total_pembelian, alamat_pengiriman,pembayaran)
        VALUES ('$id_user', '$tanggal_pembelian', '$total_pembelian', '$alamat_pengiriman', '$pembayaran')");

    $id_pembelian_barusan = $koneksi->insert_id;

    foreach ($_SESSION["keranjangoutfit"] as $id_outfit => $jumlah) {
        $ambil = $koneksi->query("SELECT * FROM outfit WHERE id_outfit='$id_outfit'");
        $pecah = $ambil->fetch_assoc();

        $nama_produk = $pecah['nama'];
        $harga_produk = $pecah['harga'];
        $subharga = $pecah['harga'] * $jumlah;

        $koneksi->query("INSERT INTO pembelian_outfit (id_pembelian, id_outfit, nama, harga, jumlah, subharga)
            VALUES ('$id_pembelian_barusan', '$id_outfit', '$nama_produk', '$harga_produk', '$jumlah', '$subharga')");
    }

    unset($_SESSION["keranjangoutfit"]);
    unset($_SESSION['totalbelanja']);

    echo "<script>alert('Pembelian Sukses');</script>";
    echo "<script>location = 'notaoutfit.php?id=$id_pembelian_barusan';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

    <?php include 'nav.php'; ?>

    <section class="kontent">
        <div class="container">
            <br><br><a  href="fasilitas.php" class="btn btn-outline-dark mt-auto">Kembali</a>
            <h1 style="padding-top: 40px;" class="text-start">Checkout</h1>
            <hr>
            <form method="post">
                <div class="row">
                
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['username']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Alamat Pengiriman</label>
                            <textarea class="form-control" name="alamat_pengiriman" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Metode Pembayaran</label>
                            <select name="pembayaran" class="form-select" required>
                                <option value="Cash On Delivery">Cash On Delivery</option>
                                <option value="" disabled selected>Qris Coming Soon</option>
                                <option value="" disabled selected>Transfer Coming Soon</option>
                                <option value="" disabled selected>Pilih Metode Pembayaran</option>
                            </select required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Ringkasan Belanja</h3>
                        
                            <hr>
                            <h4>Total: Rp. <?php echo number_format($_SESSION['totalbelanja']); ?></h4>
                            <button class="btn btn-primary" name="checkoutoutfit">Checkout</button>
                            
                    </div>
                    
                </div>
            </form>
        </div>
    </section>
    <?php include 'nav-bawah.php' ?>

</body>
</html>
