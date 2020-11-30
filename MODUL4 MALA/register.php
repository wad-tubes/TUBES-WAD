<!DOCTYPE html>
<html>
<head>
	<title>Register WAD Beauty</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body {
	  background-color: #56baed;
	}
	.wrapper {
	  display: flex;
	  align-items: center;
	  flex-direction: column; 
	  justify-content: center;
	  width: 100%;
	  min-height: 100%;
	  padding: 20px;
	}

	#formContent {
	  -webkit-border-radius: 10px 10px 10px 10px;
	  border-radius: 10px 10px 10px 10px;
	  background: #fff;
	  padding: 30px;
	  width: 90%;
	  max-width: 450px;
	  position: relative;
	  padding: 0px;
	  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	  text-align: center;
	}

	#formFooter {
	  background-color: #f6f6f6;
	  border-top: 1px solid #dce8f1;
	  padding: 25px;
	  text-align: center;
	  -webkit-border-radius: 0 0 10px 10px;
	  border-radius: 0 0 10px 10px;
	}

	input[type=text], select, textarea{
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}
	input[type=email], select, textarea{
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}
	input[type=password], select, textarea{
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="">WAD Beauty</a>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="login.php">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="register.php">Register</a>
	      </li>
	    </ul>
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

	<div class="wrapper">
	  <div id="formContent">
	  	<h2>Registrasi</h2>
	  	<div class="container">
		    <form action="cek_regist.php" method="POST">
		    	<label style="float: left">Nama</label>
		    	<input type="text" id="nama" name="nama" placeholder="nama">
		    	<label style="float: left">E-mail</label>
		      	<input type="email" id="email" name="email" placeholder="e-mail">
		      	<label style="float: left">No. Handphone</label>
		      	<input type="text" id="no_hp" name="no_hp" placeholder="Nomor Hanphone">
		      	<label style="float: left">Kata Sandi</label>
		      	<input type="password" id="password" name="password" placeholder="password">
		      	<label style="float: left">Konfirmasi Kata Sandi</label>
		      	<input type="password" id="password2" name="password2" placeholder="password">
		      	<input  type="submit" class="btn btn-primary" id="regist" value="Daftar" placeholder="Daftar">
		    </form>
	    </div>

	    <div id="formFooter">
	    	<h5>Sudah punya akun? <a href="login.php">Login</a></h5>
	    </div>

	  </div>
	</div>
</body>
</html>