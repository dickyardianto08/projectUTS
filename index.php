<?php 
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>UTS</title>
  </head>
  <body>
	<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
			}
		}
		?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadoh-sm" style="background-color: #4700D8;">
    <div class="container">
        <a class="navbar-brand text-light" href="#" style="margin-left: 30px;">
        <img src="asset/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top ">
        Blasting
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light " href="about us.php">About Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- akhir Navbar -->
    <!-- Selamat Datang -->
    <section>
        <h3 style="margin-top: 30px; margin-left :120px;">Halo Selamat Datang<br>Sobat Drummer !</h3>
        <h6 style="margin-top: 30px; margin-left :120px;">Bingung cari Tempat belajar Drum?, Tenang<br>kini <b>Blasting</b> Hadir untuk anda. <br>Buruan daftar sekarang !!!</h6><br><br>
    </section>
    <!-- Akhir Selamat Datang -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<div class="container">
	<div class="row">
		<div class="col-9">
			<h5 ><b>Login</b></h5>
			<form action="cek_login.php" method="post">
				<label>Username :</label><br>
				<input type="text" name="username" class="form_login" required="required"><br>
	
				<label>Password :</label><br>
				<input type="password" name="password" class="form_login" required="required"><br><br>
				<button type='submit' class=' btn btn-success '>Masuk</button>
				<br/>
				<br/>
			</form>
		</div>
		<div class="col-3">
		<img src="asset/drum.png" width="300px" alt="">
		</div>
	</div>
</div>
</div>
</body>
</html>