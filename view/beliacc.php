<?php
session_start();
// mendapatkan id_produk dari url 

$id_acc = $_GET['id_acc'];

// Jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1

if (isset($_SESSION['keranjangacc'][$id_acc]))
{
	$_SESSION['keranjangacc'][$id_acc]+=1;
}

//Selain itu (belum ada di keranjang) maka produk itu di anggap dibeli 1

else
{
	$_SESSION['keranjangacc'][$id_acc]=1;
}


//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//larikan ke halaman keranjang

$_SESSION['message'] = "Produk telah masuk ke keranjang belanja";
echo "<script>location='keranjangacc.php';</script>";

?>