<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
// melakukan pengechekan ke database
$sql  = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
$chek = mysqli_num_rows($sql);
if($chek>0)
{
    // membuat session
    $_SESSION['status_login'] = "sudah_login";
    $_SESSION['username']     = $username;
    echo "Data berhasil disimpan<br>"; 
    header("location:../admin/index.php");
}else{
    
    header("location:../auth/login_admin.php");
}