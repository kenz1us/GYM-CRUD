<?php
$koneksi = new mysqli("localhost", "root", "", "gym");

if (isset($_GET['id_suplement'])) {
    $id = $_GET['id_suplement'];
    $table = 'suplement';
    $id_column = 'id_suplement';
} elseif (isset($_GET['id_acc'])) {
    $id = $_GET['id_acc'];
    $table = 'acc';
    $id_column = 'id_acc';
} elseif (isset($_GET['id_outfit'])) {
    $id = $_GET['id_outfit'];
    $table = 'outfit';
    $id_column = 'id_outfit';
} elseif (isset($_GET['id_member'])) {
    $id = $_GET['id_member'];
    $table = 'member';
    $id_column = 'id_member';
} else {
    echo "<script>alert('Terjadi kesalahan.');</script>";
    echo "<script>location='index.php';</script>";
    exit();
}

$ambil = $koneksi->query("SELECT * FROM $table WHERE $id_column='$id'");
$pecah = $ambil->fetch_assoc();

if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../img/$namafoto");
        $koneksi->query("UPDATE $table SET nama='$_POST[nama]', harga='$_POST[harga]', foto='$namafoto' WHERE $id_column='$id'");
    } else {
        $koneksi->query("UPDATE $table SET nama='$_POST[nama]', harga='$_POST[harga]' WHERE $id_column='$id'");
    }

    echo "<script>alert('Data produk telah diubah');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Ubah Produk</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah Produk</h6>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pecah['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga (Rp)</label>
                    <input type="number" class="form-control" name="harga" id="harga" value="<?php echo $pecah['harga']; ?>">
                </div>
                <div class="form-group">
                    <label>Foto Produk Saat Ini</label><br>
                    <img src="../img/<?php echo $pecah['foto']; ?>" width="200" class="img-thumbnail">
                </div>
                <div class="form-group">
                    <label for="foto">Ganti Foto</label>
                    <input type="file" name="foto" class="form-control-file" id="foto">
                </div>
                <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
