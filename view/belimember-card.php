<?php
session_start();
// mendapatkan id_produk dari url 

$id_member = $_GET['id_member'];

// Jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1

if (isset($_SESSION['keranjangmember'][$id_member]))
{
	$_SESSION['keranjangmember'][$id_member]+=1;
}

//Selain itu (belum ada di keranjang) maka produk itu di anggap dibeli 1

else
{
	$_SESSION['keranjangmember'][$id_member]=1;
}


//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//larikan ke halaman keranjang

$_SESSION['message'] = "Produk telah masuk ke keranjang belanja";
echo "<script>location='keranjangmember.php';</script>";

?>