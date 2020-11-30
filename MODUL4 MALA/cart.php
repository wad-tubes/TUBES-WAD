<?php 
session_start();
include 'koneksi.php';
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
	header("location:login.php");
}
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM cart WHERE user_id=$id");
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
	  		<a href="cart.php"><i style="font-size:24px;color: black" class="fa">&#xf07a;</i></a>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Selamat Datang, <?php echo $_SESSION['nama']; ?></a>
				<div class="dropdown-menu">
					<a href="profile.php?id=<?php echo $_SESSION['id']; ?>" class="dropdown-item"> Profile</a></a>
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
	<?php } ?>

	<div class="container" style="margin-top: 75px;">
		<table class="table table-striped">
		    <tr>
		        <th>No</th> 
		        <th>Nama Barang</th>
		        <th>Harga</th>
		        <th>aksi</th>
		    </tr>
		    <tbody>
	          <?php 
	          	$total = 0;
	          	$no=1; while($d = $result->fetch_assoc()) {?>
	          <tr>
	        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
	            <form action="">
	              <td><?php echo $no++ ?></td>
	              <td><?php echo $d["nama_barang"] ?></td>
	              <td>Rp. <?php echo $d["harga"] ?></td>

	              <!-- delete -->
	              <td><center><a type="button" class="btn btn-danger btn-md"  href="hapus_cart.php?id=<?php echo $d['id']; ?>&user=<?=$id?>">Hapus</a></center></td>
	            </form>
	          </tr>
	          <?php 
	          	$total = $total + $d["harga"];
	      		} ?>
	        </tbody>
	        <tr>
	        	<th colspan="2">Total</th>
	        	<th colspan="2">Rp. <?php echo $total ?></th>
	        </tr>
	    </table>
	</div>
</body>
</html>