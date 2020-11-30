<?php 
session_start();
include 'koneksi.php';
//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
	header("location:login.php");
} 
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id=$id");
	$d = $result->fetch_assoc();
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
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	    $("#select-color").change(function(){
	        var selectedcolor = $('#select-color').val();  
	        // $("body").css({"background-color": selectedcolor});
	        if(selectedcolor == 'bg-dark') {
	        	$("nav").addClass(selectedcolor);
	        } else {
	        	$("nav").removeClass('bg-dark');
	        }
	        localStorage.setItem("nav", selectedcolor);
	    });
	});
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
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
	<?php } ?>

	<div class="container" style="width: 60%">
		<center><h2>Profile</h2></center>
		<form action="cek_profile.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" name="email" id="email" value="<?= $d['email']?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nama" name="nama" placeholder="<?= $d['nama']?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Nomor Handphone</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="<?= $d['no_hp']?>">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="password" name="password">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2 col-form-label">Password Confirm</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="password">
		    </div>
		  </div>
		  <div class="form-group row">
		  	<label class="col-sm-2 col-form-label">Warna Navbar</label>
		  	<div class="col-sm-4">
			  	<!-- <select id="warnanav" class="form-control">
			        <option selected>Light</option>
			        <option>Dark</option>
			    </select> -->
			    <select id="select-color">
			        <option value="bg-light">Light</option>
			        <option value="bg-dark">Dark</option>
			    </select>
		    </div>
		  </div>
		  <div class="form-group row">
		     <input  type="submit" class="btn btn-primary col-sm-12" id="regist" value="Submit" placeholder="Submit">
		  </div>
		  <div class="form-group row">
		     <input  type="button" class="btn col-sm-12" onclick="window.location.href='index.php'" value="Cancel">
		  </div>		  
		</form>
	</div>

</body>
</html>