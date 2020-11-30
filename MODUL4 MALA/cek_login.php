<?php 
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM user where email='$email' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);

	//menyimpan session user, nama, status dan id login
	$_SESSION['id'] = $data['id'];
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['select-color'] = 'bg-light';
	$_SESSION['status'] = "sudah_login";
	//cookie
	if(isset($_POST['remember'])) {
		setcookie('login','true',time()+60);
		setcookie('id',$data['id'],time()+60);
		setcookie('nama',$data['nama'],time()+60);
	}
	header("location:index.php?pesan=Berhasil login");
} else {
	header("location:login.php?pesan=Gagal login");
}
?>