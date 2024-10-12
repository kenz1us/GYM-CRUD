<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Tambah Produk</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama Produk</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga (Rp)</label>
                                <input type="number" class="form-control" id="harga" name="harga" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto Produk</label>
                                <input type="file" class="form-control-file" id="foto" name="foto" required>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="suplement">Suplement</option>
                                    <option value="acc">Acc</option>
                                    <option value="outfit">Outfit</option>
                                    <option value="member">Member Card</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block" name="save">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$koneksi = new mysqli("localhost", "root", "", "gym");
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../img/".$foto);

    $koneksi->query("INSERT INTO $kategori (nama, harga, foto) VALUES ('$nama', '$harga', '$foto')");

    echo "<script>alert('Produk berhasil ditambahkan');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>
