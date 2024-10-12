<?php
session_start();
// mendapatkan id_produk dari url 

$id_outfit = $_GET['id_outfit'];

// Jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1

if (isset($_SESSION['keranjangoutfit'][$id_outfit]))
{
	$_SESSION['keranjangoutfit'][$id_outfit]+=1;
}

//Selain itu (belum ada di keranjang) maka produk itu di anggap dibeli 1

else
{
	$_SESSION['keranjangoutfit'][$id_outfit]=1;
}


//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//larikan ke halaman keranjang

$_SESSION['message'] = "Produk telah masuk ke keranjang belanja";
echo "<script>location='keranjangoutfit.php';</script>";

?>