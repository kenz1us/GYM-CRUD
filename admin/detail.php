<?php

$koneksi = new mysqli("localhost", "root", "", "gym");

// Mendapatkan id_pembelian dari URL
$id_pembelian = $_GET['id'];

// Ambil data pembelian berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM pembelian 
JOIN users_umum ON pembelian.username = users_umum.username 
WHERE pembelian.id_pembelian = '$id_pembelian'
");
$detail = $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nota Pembelian</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    
    
        <div class="container">
            <br><h1>Nota Pembelian</h1>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <h3>Pembelian</h3>
                    <strong>No. Pembelian: <?php echo $detail['id_pembelian']; ?></strong><br>
                    Tanggal: <?php echo $detail['tanggal_pembelian']; ?><br>
                    Total: Rp. <?php echo number_format($detail['total_pembelian']); ?>
                    <br><br>
                    Metode Pembayaran: <strong><?php echo $detail['pembayaran']; ?></strong><br>
                </div>
                <div class="col-md-4">
                    <h3>Pelanggan</h3>
                    <strong>Nama: <?php echo $detail['username']; ?></strong><br>
                    Telepon: <?php echo $detail['nohp']; ?>
                </div>
                <div class="col-md-4">
                    <h3>Pengiriman</h3>
                    <strong>Alamat: <?php echo $detail['alamat_pengiriman']; ?></strong>
                </div>
            </div><br>
            <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subharga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        $totalbelanja_acc = 0;
        $totalbelanja_suplement = 0;
        $totalbelanja_outfit = 0;
        $totalbelanja_member = 0;

        // Ambil data pembelian acc
        $ambil = $koneksi->query("SELECT * FROM pembelian_acc WHERE id_pembelian = '$id_pembelian'");
        while($pecah = $ambil->fetch_assoc()) {
            $totalbelanja_acc += $pecah['subharga'];
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td>Rp. <?php echo number_format($pecah['subharga']); ?></td>
        </tr>
        <?php 
            $nomor++; 
        } 
        ?>

        <?php
        // Ambil data pembelian suplement
        $nomor = 1;
        $ambil = $koneksi->query("SELECT * FROM pembelian_suplement WHERE id_pembelian = '$id_pembelian'");
        while($pecah = $ambil->fetch_assoc()) {
            $totalbelanja_suplement += $pecah['subharga'];
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td>Rp. <?php echo number_format($pecah['subharga']); ?></td>
        </tr>
        <?php 
            $nomor++; 
        } 
        ?>

        <?php
        // Ambil data pembelian outfit
        $nomor = 1;
        $ambil = $koneksi->query("SELECT * FROM pembelian_outfit WHERE id_pembelian = '$id_pembelian'");
        while($pecah = $ambil->fetch_assoc()) {
            $totalbelanja_outfit += $pecah['subharga'];
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td>Rp. <?php echo number_format($pecah['subharga']); ?></td>
        </tr>
        <?php 
            $nomor++; 
        } 
        ?>

        <?php
        // Ambil data pembelian member
        $nomor = 1;
        $ambil = $koneksi->query("SELECT * FROM pembelian_member WHERE id_pembelian = '$id_pembelian'");
        while($pecah = $ambil->fetch_assoc()) {
            $totalbelanja_member += $pecah['subharga'];
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama']; ?></td>
            <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <td>Rp. <?php echo number_format($pecah['subharga']); ?></td>
        </tr>
        <?php 
            $nomor++; 
        } 
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4">Total Belanja</th>
            <th>Rp. <?php echo number_format($totalbelanja_acc + $totalbelanja_suplement + $totalbelanja_outfit + $totalbelanja_member) ?></th>
        </tr>
    </tfoot>
</table>


            <a href="index.php?halaman=pembelian" class="btn btn-outline-dark mt-auto">Kembali ke Beranda</a>
        </div>
    
    
</body>
</html>
