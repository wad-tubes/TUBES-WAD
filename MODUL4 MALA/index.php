<?php 
session_start();
//cek cookie, kalau ada langsung login
if(isset($_COOKIE['login'])) {
	if($_COOKIE['login'] == 'true'){
		$_SESSION['id'] = $_COOKIE['id'];
		$_SESSION['nama'] = $_COOKIE['nama'];
		$_SESSION['status'] = 'sudah_login';
	}
}
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>WAD Beauty</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="">WAD Beauty</a>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	  	<div class="navbar-nav ml-auto">
	  		<a href="cart.php?id=<?php echo $_SESSION['id']; ?>"><i style="font-size:24px;color: black" class="fa">&#xf07a;</i></a>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Selamat Datang, <?php echo $_SESSION['nama']; ?></a>
				<div class="dropdown-menu">
					<a href="profile.php?id=<?php echo $_SESSION['id']; ?>" class="dropdown-item"></i> Profile</a></a>
					<a href="logout.php" class="dropdown-item">Logout</a></a>
				</div>
			</div>
		</div>
	  </div>
	</nav>

	<script type="text/javascript">
		let x = localStorage.getItem("nav");
		$("nav").addClass(x);
	</script>

	<?php if(isset($_GET['pesan'])) {  ?>
		<div class="alert alert-warning" role="alert">
		  <?php echo $_GET['pesan']; ?>
		</div>
	<?php }
	?>

	<div class="container" style="width: 60%;background: linear-gradient(to right, #22c1c3, #fdbb2d);  ">
		<center>
			<h1>WAD Beauty</h1>
			<p>Tersedia skincare dengan harga murah tapi bukan murahan dan berkualitas</p>
		</center>
	</div>

	<div class="container" style="width: 60%">
		<div class="card-deck">
		  <div class="card">
		    <img class="card-img-top" src="img/1.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
		      <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk whitening</p>
		      <p>Rp169.000</p>
		    </div>
		    <div class="card-footer">
		    	<form action="tambah_cart.php" method="POST">
		    		<input type="text" name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
		    		<input type="text" name="nama_barang" value="YUJA NIACIN 30 DAYS BLEMISH CARE SERUM" hidden>
		    		<input type="text" name="harga" value="169000" hidden>
		    		<input  type="submit" class="btn btn-primary" id="add" value="Tambahkan ke Keranjang" placeholder="Daftar">
		    	</form>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="img/2.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
		      <p class="card-text">Sebagai pelembap krim ini mampu memberikan kelembapan yang menyeluruh dan tahan lama bagi kulit, sehingga terasa harus, lembab, dan kenyal.</p>
		      <p>Rp180.000</p>
		    </div>
		    <div class="card-footer">
		      	<form action="tambah_cart.php" method="POST">
		    		<input type="text" name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
		    		<input type="text" name="nama_barang" value="SOMEBYMI Snail Truecica" hidden>
		    		<input type="text" name="harga" value="180000" hidden>
		    		<input  type="submit" class="btn btn-primary" id="add" value="Tambahkan ke Keranjang" placeholder="Daftar">
		    	</form>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="img/3.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
		      <p class="card-text">Dengan kandungan AHA, BHA, dan PH bekerja secara efektif untuk membuat lebih bersih dan lebih bersinar.</p>
		      <p>Rp.108.000</p>
		    </div>
		    <div class="card-footer">
		      	<form action="tambah_cart.php" method="POST">
		    		<input type="text" name="id" value="<?php echo $_SESSION['id']; ?>" hidden>
		    		<input type="text" name="nama_barang" value="30 DAYS MIRACLE TONER" hidden>
		    		<input type="text" name="harga" value="108000" hidden>
		    		<input  type="submit" class="btn btn-primary" id="add" value="Tambahkan ke Keranjang" placeholder="Daftar">
		    	</form>
		    </div>
		  </div>
		</div>
	</div>

</body>
</html>