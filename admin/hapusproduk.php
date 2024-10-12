<?php
$koneksi = new mysqli("localhost", "root", "", "gym");

// Fungsi untuk menghapus produk berdasarkan tabel dan ID
function hapusProduk($koneksi, $tabel, $kolom_id, $id) {
    $ambil = $koneksi->query("SELECT * FROM $tabel WHERE $kolom_id='$id'");
    $pecah = $ambil->fetch_assoc();
    $foto = $pecah['foto'];
    
    if (file_exists("../foto/$foto")) {
        unlink("../foto/$foto");
    }
    
    $koneksi->query("DELETE FROM $tabel WHERE $kolom_id='$id'");
}

// Cek dan hapus berdasarkan ID yang diberikan di URL
if (isset($_GET['id_suplement'])) {
    hapusProduk($koneksi, 'suplement', 'id_suplement', $_GET['id_suplement']);
    echo "<script>alert('Produk terhapus');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
} elseif (isset($_GET['id_acc'])) {
    hapusProduk($koneksi, 'acc', 'id_acc', $_GET['id_acc']);
    echo "<script>alert('Produk terhapus');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
} elseif (isset($_GET['id_outfit'])) {
    hapusProduk($koneksi, 'outfit', 'id_outfit', $_GET['id_outfit']);
    echo "<script>alert('Produk terhapus');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
} elseif (isset($_GET['id_member'])) {
    hapusProduk($koneksi, 'member', 'id_member', $_GET['id_member']);
    echo "<script>alert('Produk terhapus');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
} else {
    echo "<script>alert('ID produk tidak valid');</script>";
    echo "<script>location='index.php';</script>";
    exit();
}
?>

<script>
function konfirmasiHapus(url) {
    if (confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
        window.location.href = url;
    }
}
</script>

<!-- Contoh tombol hapus -->
<a href="javascript:void(0);" onclick="konfirmasiHapus('index.php?id_suplement=1');">Hapus Suplement</a>
<a href="javascript:void(0);" onclick="konfirmasiHapus('index.php?id_acc=1');">Hapus Accessory</a>
<a href="javascript:void(0);" onclick="konfirmasiHapus('index.php?id_outfit=1');">Hapus Outfit</a>
<a href="javascript:void(0);" onclick="konfirmasiHapus('index.php?id_member=1');">Hapus Member Card</a>
