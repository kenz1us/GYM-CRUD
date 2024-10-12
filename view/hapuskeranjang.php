<?php
session_start();

if (isset($_GET["id_suplement"])) {
    $id_suplement = $_GET["id_suplement"];
    unset($_SESSION["keranjangsuplement"][$id_suplement]);
    echo "<script>alert('Produk telah dihapus dari keranjang');</script>";
    echo "<script>location = 'keranjangsuplement.php';</script>";
    exit();
}

if (isset($_GET["id_member"])) {
    $id_member = $_GET["id_member"];
    unset($_SESSION["keranjangmember"][$id_member]);
    echo "<script>alert('Produk telah dihapus dari keranjang');</script>";
    echo "<script>location = 'keranjangmember.php';</script>";
    exit();
}

if (isset($_GET["id_acc"])) {
    $id_acc = $_GET["id_acc"];
    unset($_SESSION["keranjangacc"][$id_acc]);
    echo "<script>alert('Produk telah dihapus dari keranjang');</script>";
    echo "<script>location = 'keranjangacc.php';</script>";
    exit();
}

if (isset($_GET["id_outfit"])) {
    $id_outfit = $_GET["id_outfit"];
    unset($_SESSION["keranjangoutfit"][$id_outfit]);
    echo "<script>alert('Produk telah dihapus dari keranjang');</script>";
    echo "<script>location = 'keranjangoutfit.php';</script>";
    exit();
}

echo "<script>alert('Produk tidak ditemukan');</script>";
echo "<script>location = 'keranjang.php';</script>";
exit();
?>
