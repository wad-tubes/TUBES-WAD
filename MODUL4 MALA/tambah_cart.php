<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"INSERT INTO `cart` VALUES (NULL,'$id','$nama_barang','$harga')");	
header("location:index.php?pesan=Berhasil Ditambahkan");
?>