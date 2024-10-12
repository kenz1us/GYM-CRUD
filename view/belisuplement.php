<?php
session_start();
// mendapatkan id_produk dari url 

$id_suplement = $_GET['id_suplement'];

// Jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1

if (isset($_SESSION['keranjangsuplement'][$id_suplement]))
{
	$_SESSION['keranjangsuplement'][$id_suplement]+=1;
	$_SESSION['message'] = "Data Deleted Successfully";
}

//Selain itu (belum ada di keranjang) maka produk itu di anggap dibeli 1

else
{
	$_SESSION['keranjangsuplement'][$id_suplement]=1;
}


//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//larikan ke halaman keranjang

// echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
$_SESSION['message'] = "Produk telah masuk ke keranjang belanja";
echo "<script>location='keranjangsuplement.php';</script>";

?>