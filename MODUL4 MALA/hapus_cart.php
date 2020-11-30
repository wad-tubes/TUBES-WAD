<?php 
include 'koneksi.php';
$id   = $_GET['id'];
$user = $_GET['user'];
$result = mysqli_query($koneksi,"DELETE FROM cart WHERE id = '$id'");
// mengalihkan ke halaman index.php
if($result) {
	header("location:cart.php?pesan=Berhasil Dihapus&id=$user");
} else {
	header("location:index.php?pesan=Gagal Dihapus");
}
?>