<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM user where nama='$nama'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) { //berarti ada di database
	header("location:register.php?pesan=Gagal Registrasi");
} else {
	mysqli_query($koneksi,"INSERT INTO `user` VALUES (NULL,'$nama','$email','$no_hp','$password')");	
	header("location:register.php?pesan=Berhasil Registrasi");
}
?>