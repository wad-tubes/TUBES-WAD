<?php 
session_start();
include 'koneksi.php';
 
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$select_color = $_POST['select_color'];

$result = mysqli_query($koneksi,"SELECT * FROM user where id='$id'");
$cek = mysqli_num_rows($result);
 
if($cek > 0) { //berarti ada di database
	mysqli_query($koneksi,"UPDATE `user` SET `id`='$id',`nama`='$nama',`email`='$email',`no_hp`='$no_hp',`password`='$password' WHERE id='$id'");
	$_SESSION['nama'] = $nama;
	$_SESSION['select_color'] = $select_color
	header("location:profile.php?id=$id&pesan=Berhasil di update!");
} else {
	header("location:profile.php?pesan=Gagal di update");
}
?>